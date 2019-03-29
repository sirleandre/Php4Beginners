<?php
declare(strict_types=1);

namespace TYPO3\CMS\Install\Updates;

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

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Merge URLs divided in pages.urltype and pages.url into pages.url
 */
class MigrateUrlTypesInPagesUpdate extends AbstractUpdate
{
    /**
     * @var string
     */
    protected $title = 'Migrate pages.urltype to pages.url';

    private $databaseTables = ['pages', 'pages_language_overlay'];
    private $urltypes = ['', 'http://', 'ftp://', 'mailto:', 'https://'];

    /**
     * Checks if an update is needed
     *
     * @param string $description The description for the update
     * @return bool Whether an update is needed (true) or not (false)
     * @throws \InvalidArgumentException
     */
    public function checkForUpdate(&$description): bool
    {
        if ($this->isWizardDone()) {
            return false;
        }

        if ($this->checkIfWizardIsNotRequired()) {
            $this->markWizardAsDone();
            return false;
        }

        $description = '<p>The page property "URL Protocol" for external URLs has been merged into the URL itself.</p>
The update wizard takes care of properly populating all existing pages and page translations.';

        $recordsToMigrate = 0;

        // Check if there is data to migrate
        foreach ($this->databaseTables as $databaseTable) {
            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
                ->getQueryBuilderForTable($databaseTable);
            $queryBuilder->getRestrictions()->removeAll();
            $recordsToMigrate = $queryBuilder->count('*')
                ->from($databaseTable)
                ->where(
                    $queryBuilder->expr()->neq('urltype', 0),
                    $queryBuilder->expr()->neq('url', $queryBuilder->createPositionalParameter(''))
                )
                ->execute()
                ->fetchColumn();

            if ($recordsToMigrate > 0) {
                break;
            }
        }

        return $recordsToMigrate > 0;
    }

    /**
     * Check each table if the column exists
     *
     * @return bool
     * @throws \InvalidArgumentException
     */
    protected function checkIfWizardIsNotRequired(): bool
    {
        foreach ($this->databaseTables as $key => $databaseTable) {
            $columns = GeneralUtility::makeInstance(ConnectionPool::class)
                ->getConnectionForTable($databaseTable)
                ->getSchemaManager()
                ->listTableColumns($databaseTable);
            if (!isset($columns['urltype'])) {
                unset($this->databaseTables[$key]);
            }
        }

        return count($this->databaseTables) === 0;
    }

    /**
     * Moves data from pages.urltype to pages.url
     *
     * @param array $databaseQueries Queries done in this update
     * @param string $customMessage Custom messages
     * @return bool
     * @throws \InvalidArgumentException
     * @throws \Doctrine\DBAL\DBALException
     */
    public function performUpdate(array &$databaseQueries, &$customMessage): bool
    {
        if ($this->checkIfWizardIsNotRequired()) {
            $this->markWizardAsDone();
            return false;
        }
        foreach ($this->databaseTables as $databaseTable) {
            $connection = GeneralUtility::makeInstance(ConnectionPool::class)
                ->getConnectionForTable($databaseTable);

            // Process records that have entries in pages.urltype
            $queryBuilder = $connection->createQueryBuilder();
            $queryBuilder->getRestrictions()->removeAll();
            $statement = $queryBuilder->select('uid', 'urltype', 'url')
                ->from($databaseTable)
                ->where(
                    $queryBuilder->expr()->neq('urltype', 0),
                    $queryBuilder->expr()->neq('url', $queryBuilder->createPositionalParameter(''))
                )
                ->execute();

            $databaseQueries[] = $queryBuilder->getSQL();

            while ($row = $statement->fetch()) {
                $url = $this->urltypes[(int)$row['urltype']] . $row['url'];
                $updateQueryBuilder = $connection->createQueryBuilder();
                $updateQueryBuilder
                    ->update($databaseTable)
                    ->where(
                        $updateQueryBuilder->expr()->eq(
                            'uid',
                            $updateQueryBuilder->createNamedParameter($row['uid'], \PDO::PARAM_INT)
                        )
                    )
                    ->set('url', $updateQueryBuilder->createNamedParameter($url), false)
                    ->set('urltype', 0);

                $databaseQueries[] = $updateQueryBuilder->getSQL();
                $updateQueryBuilder->execute();
            }
        }
        $this->markWizardAsDone();
        return true;
    }
}
