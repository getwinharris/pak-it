<?php
/**
* A specialized version of `baseAggregator` for arrays.
*
* @private
* @param {Array} [array] The array to iterate over.
* @param {Function} setter The function to set `accumulator` values.
* @param {Function} iteratee The iteratee to transform keys.
* @param {Object} accumulator The initial aggregated object.
* @returns {Function} Returns `accumulator`.
*/
function arrayAggregator($array, $setter, $iteratee, $accumulator) {
  $index = -1;
      $length = array == null ? 0 : (is_array($array) ? count($array) : strlen($array));

  while (++$index < $length) {
    $value = array[index];
    setter(accumulator, $value, iteratee($value), array);
  }
  return accumulator;
}

return arrayAggregator;

