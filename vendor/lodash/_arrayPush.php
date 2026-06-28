<?php
/**
* Appends the elements of `values` to `array`.
*
* @private
* @param {Array} array The array to modify.
* @param {Array} values The values to append.
* @returns {Array} Returns `array`.
*/
function arrayPush($array, $values) {
  $index = -1;
      $length = (is_array($values) ? count($values) : strlen($values));
      $offset = (is_array($array) ? count($array) : strlen($array));

  while (++$index < $length) {
    array[$offset + $index] = values[$index];
  }
  return array;
}

return arrayPush;

