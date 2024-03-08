<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\ValueObject\RenameClassAndConstFetch;
use Rector\ValueObject\PhpVersion;
use Ssch\TYPO3Rector\General\Renaming\ConstantsToBackedEnumValueRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../../config/config.php');
    $rectorConfig->ruleWithConfiguration(ConstantsToBackedEnumValueRector::class, [
        new RenameClassAndConstFetch(
            'TYPO3\CMS\Core\Versioning\VersionState',
            'DEFAULT_STATE',
            'TYPO3\CMS\Core\Versioning\VersionState',
            'DEFAULT_STATE'
        ),
        new RenameClassAndConstFetch(
            'TYPO3\CMS\Core\Versioning\VersionState',
            'NEW_PLACEHOLDER',
            'TYPO3\CMS\Core\Versioning\VersionState',
            'NEW_PLACEHOLDER'
        ),
        new RenameClassAndConstFetch(
            'TYPO3\CMS\Core\Versioning\VersionState',
            'DELETE_PLACEHOLDER',
            'TYPO3\CMS\Core\Versioning\VersionState',
            'DELETE_PLACEHOLDER'
        ),
        new RenameClassAndConstFetch(
            'TYPO3\CMS\Core\Versioning\VersionState',
            'MOVE_POINTER',
            'TYPO3\CMS\Core\Versioning\VersionState',
            'MOVE_POINTER'
        ),
    ]);
};
