<?php
$baseEach = require __DIR__ . '/_baseEach';

/**
* The base implementation of `_.filter` without support for iteratee shorthands.
*
* @private
* @param {Array|Object} collection The collection to iterate over.
* @param {Function} predicate The function invoked per iteration.
* @returns {Array} Returns the new filtered array.
*/
function baseFilter($collection, $predicate) {
  $result = [];
  $baseEach($collection, function($value, $index, $collection) {
    if (predicate($value, $index, $collection)) {
      $result[] = $value;
    }
  });
  return $result;
}

return baseFilter;

