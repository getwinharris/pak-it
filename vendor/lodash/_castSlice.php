<?php
$baseSlice = require __DIR__ . '/_baseSlice';

/**
* Casts `array` to a slice if it's needed.
*
* @private
* @param {Array} array The array to inspect.
* @param {number} start The start position.
* @param {number} [end=array.length] The end position.
* @returns {Array} Returns the cast slice.
*/
function castSlice($array, $start, $end) {
  $length = array.length;
  end = end === null ? $length : end;
  return (!start && end >= $length) ? array : $baseSlice(array, start, end);
}

return castSlice;

