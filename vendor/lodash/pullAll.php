<?php
$basePullAll = require __DIR__ . '/_basePullAll';

/**
* This method is like `_.pull` except that it accepts an array of values to remove.
*
* **Note:** Unlike `_.difference`, this method mutates `array`.
*
* @static
* @memberOf _
* @since 4.0.0
* @category Array
* @param {Array} array The array to modify.
* @param {Array} values The values to remove.
* @returns {Array} Returns `array`.
* @example
*
* var array = ['a', 'b', 'c', 'a', 'b', 'c'];
*
* _.pullAll(array, ['a', 'c']);
* console.log(array);
* // => ['b', 'b']
*/
function pullAll($array, $values) {
  return ($array && (is_array($array) ? count($array) : strlen($array)) && values && (is_array($values) ? count($values) : strlen($values)))
    ? $basePullAll($array, values)
    : $array;
}

return pullAll;

