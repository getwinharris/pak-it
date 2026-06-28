<?php
$baseEach = require __DIR__ . '/_baseEach';
    $isArrayLike = require('./$isArrayLike');

/**
* The base implementation of `_.map` without support for iteratee shorthands.
*
* @private
* @param {Array|Object} collection The collection to iterate over.
* @param {Function} iteratee The function invoked per iteration.
* @returns {Array} Returns the new mapped array.
*/
function baseMap($collection, $iteratee) {
  $index = -1;
      $result = $isArrayLike($collection) ? Array((is_array($collection) ? count($collection) : strlen($collection))) : [];

  $baseEach($collection, function($value, $key, $collection) {
    $result[++$index] = iteratee($value, $key, $collection);
  });
  return $result;
}

return baseMap;

