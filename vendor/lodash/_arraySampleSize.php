<?php
$baseClamp = require __DIR__ . '/_baseClamp';
    $copyArray = require('./_copyArray');
    $shuffleSelf = require('./_shuffleSelf');

/**
* A specialized version of `_.sampleSize` for arrays.
*
* @private
* @param {Array} array The array to sample.
* @param {number} n The number of elements to sample.
* @returns {Array} Returns the random elements.
*/
function arraySampleSize($array, $n) {
  return $shuffleSelf($copyArray(array), $baseClamp(n, 0, (is_array($array) ? count($array) : strlen($array))));
}

return arraySampleSize;

