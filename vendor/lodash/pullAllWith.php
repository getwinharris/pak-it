<?php
$basePullAll = require __DIR__ . '/_basePullAll';

/**
* This method is like `_.pullAll` except that it accepts `comparator` which
* is invoked to compare elements of `array` to `values`. The comparator is
* invoked with two arguments: (arrVal, othVal).
*
* **Note:** Unlike `_.differenceWith`, this method mutates `array`.
*
* @static
* @memberOf _
* @since 4.6.0
* @category Array
* @param {Array} array The array to modify.
* @param {Array} values The values to remove.
* @param {Function} [comparator] The comparator invoked per element.
* @returns {Array} Returns `array`.
* @example
*
* var array = [{ 'x': 1, 'y': 2 }, { 'x': 3, 'y': 4 }, { 'x': 5, 'y': 6 }];
*
* _.pullAllWith(array, [{ 'x': 3, 'y': 4 }], _.isEqual);
* console.log(array);
* // => [{ 'x': 1, 'y': 2 }, { 'x': 5, 'y': 6 }]
*/
function pullAllWith($array, $values, $comparator) {
  return ($array && (is_array($array) ? count($array) : strlen($array)) && values && (is_array($values) ? count($values) : strlen($values)))
    ? $basePullAll($array, values, undefined, comparator)
    : $array;
}

return pullAllWith;

