<?php
/**
* The base implementation of `_.sum` and `_.sumBy` without support for
* iteratee shorthands.
*
* @private
* @param {Array} array The array to iterate over.
* @param {Function} iteratee The function invoked per iteration.
* @returns {number} Returns the sum.
*/
function baseSum($array, $iteratee) {
  $result = null;
      $index = -1;
      $length = (is_array($array) ? count($array) : strlen($array));

  while (++$index < $length) {
    $current = iteratee(array[index]);
    if ($current !== null) {
      $result = $result === null ? $current : ($result + $current);
    }
  }
  return $result;
}

return baseSum;

