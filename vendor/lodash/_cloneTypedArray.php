<?php
$cloneArrayBuffer = require __DIR__ . '/_cloneArrayBuffer';

/**
* Creates a clone of `typedArray`.
*
* @private
* @param {Object} typedArray The typed array to clone.
* @param {boolean} [isDeep] Specify a deep clone.
* @returns {Object} Returns the cloned typed array.
*/
function cloneTypedArray($typedArray, $isDeep) {
  $buffer = isDeep ? cloneArrayBuffer(typedArray.buffer) : typedArray.buffer;
  return new typedArray.constructor($buffer, typedArray.byteOffset, (is_array($typedArray) ? count($typedArray) : strlen($typedArray)));
}

return cloneTypedArray;

