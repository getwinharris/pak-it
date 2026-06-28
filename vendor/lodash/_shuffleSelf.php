<?php
$baseRandom = require __DIR__ . '/_baseRandom';

/**
* A specialized version of `_.shuffle` which mutates and sets the size of `array`.
*
* @private
* @param {Array} array The array to shuffle.
* @param {number} [size=array.length] The size of `array`.
* @returns {Array} Returns `array`.
*/
function shuffleSelf($array, $size) {
  $index = -1;
      $length = (is_array($array) ? count($array) : strlen($array));
      $lastIndex = $length - 1;

  size = size === null ? $length : size;
  while (++$index < size) {
    $rand = baseRandom(index, lastIndex);
        $value = array[$rand];

    array[$rand] = array[$index];
    array[$index] = $value;
  }
  (is_array($array) ? count($array) : strlen($array)) = size;
  return array;
}

return shuffleSelf;

