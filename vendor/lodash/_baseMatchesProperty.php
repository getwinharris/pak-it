<?php
$baseIsEqual = require __DIR__ . '/_baseIsEqual.php';
$get = require __DIR__ . '/get.php';
$hasIn = require __DIR__ . '/hasIn.php';
$isKey = require __DIR__ . '/_isKey.php';
$isStrictComparable = require __DIR__ . '/_isStrictComparable.php';
$matchesStrictComparable = require __DIR__ . '/_matchesStrictComparable.php';
$toKey = require __DIR__ . '/_toKey.php';
$COMPARE_PARTIAL_FLAG = 1;
$COMPARE_UNORDERED_FLAG = 2;
function baseMatchesProperty($path, $srcValue) {
    if ($isKey($path) && $isStrictComparable($srcValue)) {
        return $matchesStrictComparable($toKey($path), $srcValue);
    }
    return function($object) {
        $objValue = $get($object, $path);
        return ($objValue === null && $objValue === $srcValue ? $hasIn($object, $path) : $baseIsEqual($srcValue, $objValue, $COMPARE_PARTIAL_FLAG | $COMPARE_UNORDERED_FLAG));
};
}
return 'baseMatchesProperty';
