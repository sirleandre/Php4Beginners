<?php
namespace TYPO3\CMS\Fluid\ViewHelpers\Link;

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

/**
 * A view helper for creating links to TYPO3 pages.
 *
 * = Examples =
 *
 * <code title="link to the current page">
 * <f:link.page>page link</f:link.page>
 * </code>
 * <output>
 * <a href="index.php?id=123">page link</f:link.action>
 * (depending on the current page and your TS configuration)
 * </output>
 *
 * <code title="query parameters">
 * <f:link.page pageUid="1" additionalParams="{foo: 'bar'}">page link</f:link.page>
 * </code>
 * <output>
 * <a href="index.php?id=1&foo=bar">page link</f:link.action>
 * (depending on your TS configuration)
 * </output>
 *
 * <code title="query parameters for extensions">
 * <f:link.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}">page link</f:link.page>
 * </code>
 * <output>
 * <a href="index.php?id=1&extension_key[foo]=bar">page link</f:link.action>
 * (depending on your TS configuration)
 * </output>
 */
class PageViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper
{
    /**
     * @var string
     */
    protected $tagName = 'a';

    /**
     * Arguments initialization
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerUniversalTagAttributes();
        $this->registerTagAttribute('target', 'string', 'Target of link', false);
        $this->registerTagAttribute('rel', 'string', 'Specifies the relationship between the current document and the linked document', false);
        $this->registerArgument('pageUid', 'int', 'Target page. See TypoLink destination');
        $this->registerArgument('pageType', 'int', 'Type of the target page. See typolink.parameter');
        $this->registerArgument('noCache', 'bool', 'Set this to disable caching for the target page. You should not need this.');
        $this->registerArgument('noCacheHash', 'bool', 'Set this to suppress the cHash query parameter created by TypoLink. You should not need this.');
        $this->registerArgument('section', 'string', 'The anchor to be added to the URI');
        $this->registerArgument('linkAccessRestrictedPages', 'bool', 'If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.');
        $this->registerArgument('additionalParams', 'array', 'Additional query parameters that won\'t be prefixed like $arguments (overrule $arguments)');
        $this->registerArgument('absolute', 'bool', 'If set, the URI of the rendered link is absolute');
        $this->registerArgument('addQueryString', 'bool', 'If set, the current query parameters will be kept in the URI');
        $this->registerArgument('argumentsToBeExcludedFromQueryString', 'array', 'Arguments to be removed from the URI. Only active if $addQueryString = TRUE');
        $this->registerArgument('addQueryStringMethod', 'string', 'Set which parameters will be kept. Only active if $addQueryString = TRUE');
    }

    /**
     * @return string Rendered page URI
     */
    public function render()
    {
        $pageUid = (int)$this->arguments['pageUid'] ?: null;
        $pageType = (int)$this->arguments['pageType'];
        $noCache = (bool)$this->arguments['noCache'];
        $noCacheHash = (bool)$this->arguments['noCacheHash'];
        $section = (string)$this->arguments['section'];
        $linkAccessRestrictedPages = (bool)$this->arguments['linkAccessRestrictedPages'];
        $additionalParams = (array)$this->arguments['additionalParams'];
        $absolute = (bool)$this->arguments['absolute'];
        $addQueryString = (bool)$this->arguments['addQueryString'];
        $argumentsToBeExcludedFromQueryString = (array)$this->arguments['argumentsToBeExcludedFromQueryString'];
        $addQueryStringMethod = $this->arguments['addQueryStringMethod'];
        $uriBuilder = $this->renderingContext->getControllerContext()->getUriBuilder();
        $uri = $uriBuilder->reset()
            ->setTargetPageUid($pageUid)
            ->setTargetPageType($pageType)
            ->setNoCache($noCache)
            ->setUseCacheHash(!$noCacheHash)
            ->setSection($section)
            ->setLinkAccessRestrictedPages($linkAccessRestrictedPages)
            ->setArguments($additionalParams)
            ->setCreateAbsoluteUri($absolute)
            ->setAddQueryString($addQueryString)
            ->setArgumentsToBeExcludedFromQueryString($argumentsToBeExcludedFromQueryString)
            ->setAddQueryStringMethod($addQueryStringMethod)
            ->build();
        if ((string)$uri !== '') {
            $this->tag->addAttribute('href', $uri);
            $this->tag->setContent($this->renderChildren());
            $result = $this->tag->render();
        } else {
            $result = $this->renderChildren();
        }
        return $result;
    }
}
