<?php

use Ssch\TYPO3Rector\Tests\Rector\General\Renaming\ConstantsToBackedEnumValueRector\Source\MyOtherFileType;
use TYPO3\CMS\Core\Resource\AbstractFile;

$type1 = VersionState::DEFAULT_STATE;
$type2 = VersionState::NEW_PLACEHOLDER;
$type3 = VersionState::DELETE_PLACEHOLDER;
$type4 = VersionState::MOVE_POINTER;

$someClass = VersionState::cast('DEFAULT_STATE');

if (VersionState::cast('DEFAULT_STATE')->equals(VersionState::NEW_PLACEHOLDER)) {
    return;
}

?>
-----
<?php

use TYPO3\CMS\Core\Versioning\VersionState;

$type1 = VersionState::DEFAULT_STATE->value;
$type2 = VersionState::NEW_PLACEHOLDER->value;
$type3 = VersionState::DELETE_PLACEHOLDER->value;
$type4 = VersionState::MOVE_POINTER->value;

$someClass = VersionState::tryFrom('DEFAULT_STATE');
if (VersionState::tryFrom('DEFAULT_STATE') === VersionState::NEW_PLACEHOLDER) {
    return;
}

?>
