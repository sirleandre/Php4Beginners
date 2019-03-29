<?php
namespace TYPO3\CMS\Extbase\Core;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Routing\Route;
use TYPO3\CMS\Extbase\Mvc\Web\Response;

/**
 * Creates a request an dispatches it to the controller which was specified
 * by TS Setup, flexForm and returns the content to the v4 framework.
 *
 * This class is the main entry point for extbase extensions.
 */
class Bootstrap implements \TYPO3\CMS\Extbase\Core\BootstrapInterface
{
    /**
     * Back reference to the parent content object
     * This has to be public as it is set directly from TYPO3
     *
     * @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
     */
    public $cObj;

    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManager
     */
    protected $configurationManager;

    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     */
    protected $persistenceManager;

    /**
     * Explicitly initializes all necessary Extbase objects by invoking the various initialize* methods.
     *
     * Usually this method is only called from unit tests or other applications which need a more fine grained control over
     * the initialization and request handling process. Most other applications just call the run() method.
     *
     * @param array $configuration The TS configuration array
     * @throws \RuntimeException
     * @see run()
     * @api
     */
    public function initialize($configuration)
    {
        if (!$this->isInCliMode()) {
            if (!isset($configuration['extensionName']) || $configuration['extensionName'] === '') {
                throw new \RuntimeException('Invalid configuration: "extensionName" is not set', 1290623020);
            }
            if (!isset($configuration['pluginName']) || $configuration['pluginName'] === '') {
                throw new \RuntimeException('Invalid configuration: "pluginName" is not set', 1290623027);
            }
        }
        $this->initializeObjectManager();
        $this->initializeConfiguration($configuration);
        $this->configureObjectManager();
        $this->initializePersistence();
    }

    /**
     * Initializes the Object framework.
     *
     * @see initialize()
     */
    protected function initializeObjectManager()
    {
        $this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\ObjectManager::class);
    }

    /**
     * Initializes the Object framework.
     *
     * @param array $configuration
     * @see initialize()
     */
    public function initializeConfiguration($configuration)
    {
        $this->configurationManager = $this->objectManager->get(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::class);
        /** @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $contentObject */
        $contentObject = isset($this->cObj) ? $this->cObj : \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class);
        $this->configurationManager->setContentObject($contentObject);
        $this->configurationManager->setConfiguration($configuration);
    }

    /**
     * Configures the object manager object configuration from
     * config.tx_extbase.objects and plugin.tx_foo.objects
     *
     * @see initialize()
     */
    public function configureObjectManager()
    {
        $frameworkSetup = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
        if (!is_array($frameworkSetup['objects'])) {
            return;
        }
        $objectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class);
        foreach ($frameworkSetup['objects'] as $classNameWithDot => $classConfiguration) {
            if (isset($classConfiguration['className'])) {
                $originalClassName = rtrim($classNameWithDot, '.');
                $objectContainer->registerImplementation($originalClassName, $classConfiguration['className']);
            }
        }
    }

    /**
     * Initializes the persistence framework
     *
     * @see initialize()
     */
    public function initializePersistence()
    {
        $this->persistenceManager = $this->objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);
    }

    /**
     * Runs the the Extbase Framework by resolving an appropriate Request Handler and passing control to it.
     * If the Framework is not initialized yet, it will be initialized.
     *
     * @param string $content The content. Not used
     * @param array $configuration The TS configuration array
     * @return string $content The processed content
     * @api
     */
    public function run($content, $configuration)
    {
        $this->initialize($configuration);
        return $this->handleRequest();
    }

    /**
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\CommandException Is thrown if the response object defined an exit code > 0
     * @return string
     */
    protected function handleRequest()
    {
        /** @var $requestHandlerResolver \TYPO3\CMS\Extbase\Mvc\RequestHandlerResolver */
        $requestHandlerResolver = $this->objectManager->get(\TYPO3\CMS\Extbase\Mvc\RequestHandlerResolver::class);
        $requestHandler = $requestHandlerResolver->resolveRequestHandler();

        $response = $requestHandler->handleRequest();
        // If response is NULL after handling the request we need to stop
        // This happens for instance, when a USER object was converted to a USER_INT
        // @see TYPO3\CMS\Extbase\Mvc\Web\FrontendRequestHandler::handleRequest()
        if ($response === null) {
            $content = '';
        } else {
            $content = $response->shutdown();
            $this->resetSingletons();
            $this->objectManager->get(\TYPO3\CMS\Extbase\Service\CacheService::class)->clearCachesOfRegisteredPageIds();
            if ($this->isInCliMode() && $response->getExitCode()) {
                throw new \TYPO3\CMS\Extbase\Mvc\Exception\CommandException('The request has been terminated as the response defined an exit code.', $response->getExitCode());
            }
        }

        return $content;
    }

    /**
     * Entrypoint for backend modules, handling PSR-7 requests/responses
     *
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     * @internal
     */
    public function handleBackendRequest(ServerRequestInterface $request): ResponseInterface
    {
        // build the configuration from the Server request / route
        /** @var Route $route */
        $route = $request->getAttribute('route');
        $moduleConfiguration = $route->getOption('moduleConfiguration');
        $configuration = [
            'extensionName' => $moduleConfiguration['extensionName'],
            'pluginName' => $route->getOption('moduleName')
        ];
        if (isset($moduleConfiguration['vendorName'])) {
            $configuration['vendorName'] = $moduleConfiguration['vendorName'];
        }

        $this->initialize($configuration);

        /** @var $requestHandlerResolver \TYPO3\CMS\Extbase\Mvc\RequestHandlerResolver */
        $requestHandlerResolver = $this->objectManager->get(\TYPO3\CMS\Extbase\Mvc\RequestHandlerResolver::class);
        $requestHandler = $requestHandlerResolver->resolveRequestHandler();
        /** @var Response $extbaseResponse */
        $extbaseResponse = $requestHandler->handleRequest();

        // Convert to PSR-7 response and hand it back to TYPO3 Core
        $response = $this->convertExtbaseResponseToPsr7Response($extbaseResponse);
        $this->resetSingletons();
        $this->objectManager->get(\TYPO3\CMS\Extbase\Service\CacheService::class)->clearCachesOfRegisteredPageIds();
        return $response;
    }

    /**
     * Converts a Extbase response object into a PSR-7 Response
     *
     * @param Response $extbaseResponse
     * @return ResponseInterface
     */
    protected function convertExtbaseResponseToPsr7Response(Response $extbaseResponse): ResponseInterface
    {
        $response = new \TYPO3\CMS\Core\Http\Response(
            'php://temp',
            $extbaseResponse->getStatusCode(),
            $extbaseResponse->getUnpreparedHeaders()
        );
        $content = $extbaseResponse->getContent();
        if ($content !== null) {
            $response->getBody()->write($content);
        }
        return $response;
    }

    /**
     * Resets global singletons for the next plugin
     */
    protected function resetSingletons()
    {
        $this->persistenceManager->persistAll();
    }

    /**
     * @return bool
     */
    protected function isInCliMode()
    {
        return TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_CLI;
    }
}
