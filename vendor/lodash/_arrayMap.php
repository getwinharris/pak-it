<?php
/**
* A specialized version of `_.map` for arrays without support for iteratee
* shorthands.
*
* @private
* @param {Array} [array] The array to iterate over.
* @param {Function} iteratee The function invoked per iteration.
* @returns {Array} Returns the new mapped array.
*/
function arrayMap($array, $iteratee) {
  $index = -1;
      $length = array == null ? 0 : (is_array($array) ? count($array) : strlen($array));
      $result = Array($length);

  while (++$index < $length) {
    $result[$index] = iteratee(array[$index], $index, array);
  }
  return $result;
}

return arrayMap;

