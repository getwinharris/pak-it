<?php
$baseIsEqual = require __DIR__ . '/_baseIsEqual';
    $get = require('./$get');
    $hasIn = require('./$hasIn');
    $isKey = require('./_isKey');
    $isStrictComparable = require('./_isStrictComparable');
    $matchesStrictComparable = require('./_matchesStrictComparable');
    $toKey = require('./_toKey');

/** Used to compose bitmasks for value comparisons. */
$COMPARE_PARTIAL_FLAG = 1,
COMPARE_UNORDERED_FLAG = 2;

/**
* The base implementation of `_.matchesProperty` which doesn't clone `srcValue`.
*
* @private
* @param {string} path The path of the property to get.
* @param {*} srcValue The value to match.
* @returns {Function} Returns the new spec function.
*/
function baseMatchesProperty($path, $srcValue) {
  if ($isKey(path) && $isStrictComparable(srcValue)) {
    return $matchesStrictComparable($toKey(path), srcValue);
  }
  return function($object) {
    $objValue = get(object, path);
    return ($objValue === null && $objValue === srcValue)
      ? $hasIn($object, path)
      : $baseIsEqual(srcValue, $objValue, $COMPARE_PARTIAL_FLAG | $COMPARE_UNORDERED_FLAG);
  };
}

return baseMatchesProperty;

