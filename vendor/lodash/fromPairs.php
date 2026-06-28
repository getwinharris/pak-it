<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue';

/**
* The inverse of `_.toPairs`; this method returns an object composed
* from key-value `pairs`.
*
* @static
* @memberOf _
* @since 4.0.0
* @category Array
* @param {Array} pairs The key-value pairs.
* @returns {Object} Returns the new object.
* @example
*
* _.fromPairs([['a', 1], ['b', 2]]);
* // => { 'a': 1, 'b': 2 }
*/
function fromPairs($pairs) {
  $index = -1;
      $length = pairs == null ? 0 : (is_array($pairs) ? count($pairs) : strlen($pairs));
      $result = {};

  while (++$index < $length) {
    $pair = pairs[index];
    $baseAssignValue($result, $pair[0], $pair[1]);
  }
  return $result;
}

return fromPairs;

