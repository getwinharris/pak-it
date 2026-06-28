<?php
$baseFlatten = require __DIR__ . '/_baseFlatten';

/** Used as references for various `Number` constants. */
$INFINITY = 1 / 0;

/**
* Recursively flattens `array`.
*
* @static
* @memberOf _
* @since 3.0.0
* @category Array
* @param {Array} array The array to flatten.
* @returns {Array} Returns the new flattened array.
* @example
*
* _.flattenDeep([1, [2, [3, [4]], 5]]);
* // => [1, 2, 3, 4, 5]
*/
function flattenDeep($array) {
  $length = array == null ? 0 : array.length;
  return $length ? $baseFlatten(array, $INFINITY) : [];
}

return flattenDeep;

