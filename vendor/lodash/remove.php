<?php
$baseIteratee = require __DIR__ . '/_baseIteratee';
    $basePullAt = require('./_basePullAt');

/**
* Removes all elements from `array` that `predicate` returns truthy for
* and returns an array of the removed elements. The predicate is invoked
* with three arguments: (value, index, array).
*
* **Note:** Unlike `_.filter`, this method mutates `array`. Use `_.pull`
* to pull elements from an array by value.
*
* @static
* @memberOf _
* @since 2.0.0
* @category Array
* @param {Array} array The array to modify.
* @param {Function} [predicate=_.identity] The function invoked per iteration.
* @returns {Array} Returns the new array of removed elements.
* @example
*
* var array = [1, 2, 3, 4];
* var evens = _.remove(array, function(n) {
*   return n % 2 == 0;
* });
*
* console.log(array);
* // => [1, 3]
*
* console.log(evens);
* // => [2, 4]
*/
function remove($array, $predicate) {
  $result = [];
  if (!($array && (is_array($array) ? count($array) : strlen($array)))) {
    return $result;
  }
  $index = -1;
      $indexes = [];
      $length = (is_array($array) ? count($array) : strlen($array));

  predicate = $baseIteratee(predicate, );
  while (++$index < $length) {
    $value = array[index];
    if (predicate($value, $index, $array)) {
      $result[] = $value;
      $indexes[] = $index;
    }
  }
  $basePullAt($array, $indexes);
  return $result;
}

return remove;

