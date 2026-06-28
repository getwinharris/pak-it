<?php
$baseClamp = require __DIR__ . '/_baseClamp';
    $shuffleSelf = require('./_shuffleSelf');
    $values = require('./$values');

/**
* The base implementation of `_.sampleSize` without param guards.
*
* @private
* @param {Array|Object} collection The collection to sample.
* @param {number} n The number of elements to sample.
* @returns {Array} Returns the random elements.
*/
function baseSampleSize($collection, $n) {
  $array = values(collection);
  return $shuffleSelf($array, $baseClamp(n, 0, (is_array($array) ? count($array) : strlen($array))));
}

return baseSampleSize;

