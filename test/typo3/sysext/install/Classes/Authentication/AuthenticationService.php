<?php
declare(strict_types=1);
namespace TYPO3\CMS\Install\Authentication;

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

use TYPO3\CMS\Core\Configuration\ConfigurationManager;
use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Service\SessionService;
use TYPO3\CMS\Saltedpasswords\Salt\SaltFactory;

/**
 * Authenticates a user (currently comparing it through the install tool password, but could be extended)
 */
class AuthenticationService
{
    /**
     * @var SessionService
     */
    protected $sessionService;

    /**
     * @param SessionService $sessionService
     */
    public function __construct(SessionService $sessionService)
    {
        $this->sessionService = $sessionService;
    }

    /**
     * Checks against a given password
     *
     * @param string $password
     * @return bool if authentication was successful, otherwise false
     */
    public function loginWithPassword($password = null): bool
    {
        $validPassword = false;
        if ($password !== null && $password !== '') {
            $installToolPassword = $GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'];
            $saltFactory = SaltFactory::getSaltingInstance($installToolPassword);
            if (is_object($saltFactory)) {
                $validPassword = $saltFactory->checkPassword($password, $installToolPassword);
            } elseif (md5($password) === $installToolPassword) {
                // Update install tool password if it is still "MD5"
                $saltFactory = SaltFactory::getSaltingInstance(null, 'BE');
                $configurationManager = GeneralUtility::makeInstance(ConfigurationManager::class);
                $configurationManager->setLocalConfigurationValueByPath(
                    'BE/installToolPassword',
                    $saltFactory->getHashedPassword($password)
                );
                $validPassword = true;
            }
        }
        if ($validPassword) {
            $this->sessionService->setAuthorized();
            $this->sendLoginSuccessfulMail();
            return true;
        }
        $this->sendLoginFailedMail();
        return false;
    }

    /**
     * If install tool login mail is set, send a mail for a successful login.
     */
    protected function sendLoginSuccessfulMail()
    {
        $warningEmailAddress = $GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'];
        if ($warningEmailAddress) {
            $mailMessage = GeneralUtility::makeInstance(MailMessage::class);
            $mailMessage
                ->addTo($warningEmailAddress)
                ->setSubject('Install Tool Login at \'' . $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] . '\'')
                ->addFrom($this->getSenderEmailAddress(), $this->getSenderEmailName())
                ->setBody('There has been an Install Tool login at TYPO3 site'
                    . ' \'' . $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] . '\''
                    . ' (' . GeneralUtility::getIndpEnv('HTTP_HOST') . ')'
                    . ' from remote address \'' . GeneralUtility::getIndpEnv('REMOTE_ADDR') . '\''
                    . ' (' . GeneralUtility::getIndpEnv('REMOTE_HOST') . ')')
                ->send();
        }
    }

    /**
     * If install tool login mail is set, send a mail for a failed login.
     */
    protected function sendLoginFailedMail()
    {
        $formValues = GeneralUtility::_GP('install');
        $warningEmailAddress = $GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'];
        if ($warningEmailAddress) {
            $mailMessage = GeneralUtility::makeInstance(MailMessage::class);
            $mailMessage
                ->addTo($warningEmailAddress)
                ->setSubject('Install Tool Login ATTEMPT at \'' . $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] . '\'')
                ->addFrom($this->getSenderEmailAddress(), $this->getSenderEmailName())
                ->setBody('There has been an Install Tool login attempt at TYPO3 site'
                    . ' \'' . $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] . '\''
                    . ' (' . GeneralUtility::getIndpEnv('HTTP_HOST') . ')'
                    . ' The last 5 characters of the MD5 hash of the password tried was \'' . substr(md5($formValues['password']), -5) . '\''
                    . ' remote address was \'' . GeneralUtility::getIndpEnv('REMOTE_ADDR') . '\''
                    . ' (' . GeneralUtility::getIndpEnv('REMOTE_HOST') . ')')
                ->send();
        }
    }

    /**
     * Get sender address from configuration
     * ['TYPO3_CONF_VARS']['MAIL']['defaultMailFromAddress']
     * If this setting is empty fall back to 'no-reply@example.com'
     *
     * @return string Returns an email address
     */
    protected function getSenderEmailAddress()
    {
        return !empty($GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromAddress'])
            ? $GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromAddress']
            : 'no-reply@example.com';
    }

    /**
     * Gets sender name from configuration
     * ['TYPO3_CONF_VARS']['MAIL']['defaultMailFromName']
     * If this setting is empty, it falls back to a default string.
     *
     * @return string
     */
    protected function getSenderEmailName()
    {
        return !empty($GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromName'])
            ? $GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromName']
            : 'TYPO3 CMS install tool';
    }
}
