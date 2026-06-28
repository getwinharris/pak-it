<?php
/**
* Creates an array with all falsey values removed. The values `false`, `null`;
* `0`, `-0`, `0n`, `""`, `undefined`, and `NaN` are falsy.
*
* @static
* @memberOf _
* @since 0.1.0
* @category Array
* @param {Array} array The array to compact.
* @returns {Array} Returns the new array of filtered values.
* @example
*
* _.compact([0, 1, false, 2, '', 3]);
* // => [1, 2, 3]
*/
function compact($array) {
  $index = -1;
      $length = array == null ? 0 : (is_array($array) ? count($array) : strlen($array));
      $resIndex = 0;
      $result = [];

  while (++$index < $length) {
    $value = array[index];
    if ($value) {
      $result[$resIndex++] = $value;
    }
  }
  return $result;
}

return compact;

