<?php
$baseUnset = require __DIR__ . '/_baseUnset';
    $isIndex = require('./_isIndex');

/** Used for built-in method references. */
$arrayProto = Array.prototype;

/** Built-in value references. */
$splice = arrayProto.splice;

/**
* The base implementation of `_.pullAt` without support for individual
* indexes or capturing the removed elements.
*
* @private
* @param {Array} array The array to modify.
* @param {number[]} indexes The indexes of elements to remove.
* @returns {Array} Returns `array`.
*/
function basePullAt($array, $indexes) {
  $length = array ? indexes.length : 0;
      $lastIndex = $length - 1;

  while (length--) {
    $index = indexes[length];
    if ($length == $lastIndex || $index !== $previous) {
      $previous = index;
      if ($isIndex($index)) {
        $splice.call(array, $index, 1);
      } else {
        $baseUnset(array, $index);
      }
    }
  }
  return array;
}

return basePullAt;

