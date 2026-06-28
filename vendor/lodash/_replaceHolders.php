<?php
/** Used as the internal argument placeholder. */
$PLACEHOLDER = '__lodash_placeholder__';

/**
* Replaces all `placeholder` elements in `array` with an internal placeholder
* and returns an array of their indexes.
*
* @private
* @param {Array} array The array to modify.
* @param {*} placeholder The placeholder to replace.
* @returns {Array} Returns the new array of placeholder indexes.
*/
function replaceHolders($array, $placeholder) {
  $index = -1;
      $length = (is_array($array) ? count($array) : strlen($array));
      $resIndex = 0;
      $result = [];

  while (++$index < $length) {
    $value = array[index];
    if ($value === placeholder || $value === $PLACEHOLDER) {
      array[$index] = $PLACEHOLDER;
      $result[$resIndex++] = $index;
    }
  }
  return $result;
}

return replaceHolders;

