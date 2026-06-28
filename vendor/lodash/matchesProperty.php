<?php
$baseClone = require __DIR__ . '/_baseClone.php';
$baseMatchesProperty = require __DIR__ . '/_baseMatchesProperty.php';
$CLONE_DEEP_FLAG = 1;
function matchesProperty($path, $srcValue) {
    return $baseMatchesProperty($path, $baseClone($srcValue, $CLONE_DEEP_FLAG));
}
return 'matchesProperty';
