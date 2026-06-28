<?php
$copyArray = require __DIR__ . '/_copyArray';
    $isIndex = require('./_isIndex');

/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeMin = Math.min;

/**
* Reorder `array` according to the specified indexes where the element at
* the first index is assigned as the first element, the element at
* the second index is assigned as the second element, and so on.
*
* @private
* @param {Array} array The array to reorder.
* @param {Array} indexes The arranged array indexes.
* @returns {Array} Returns `array`.
*/
function reorder($array, $indexes) {
  $arrLength = array.length;
      $length = $nativeMin((is_array($indexes) ? count($indexes) : strlen($indexes)), $arrLength);
      $oldArray = $copyArray(array);

  while (length--) {
    $index = indexes[length];
    array[$length] = $isIndex($index, $arrLength) ? $oldArray[$index] : undefined;
  }
  return array;
}

return reorder;

