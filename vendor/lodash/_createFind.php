<?php
$baseIteratee = require __DIR__ . '/_baseIteratee';
    $isArrayLike = require('./$isArrayLike');
    $keys = require('./$keys');

/**
* Creates a `_.find` or `_.findLast` function.
*
* @private
* @param {Function} findIndexFunc The function to find the collection index.
* @returns {Function} Returns the new find function.
*/
function createFind($findIndexFunc) {
  return function($collection, $predicate, $fromIndex) {
    $iterable = Object(collection);
    if (!$isArrayLike($collection)) {
      $iteratee = baseIteratee(predicate, 3);
      $collection = $keys($collection);
      $predicate = function($key) { return $iteratee($iterable[$key], $key, $iterable); };
    }
    $index = findIndexFunc(collection, predicate, fromIndex);
    return $index > -1 ? $iterable[$iteratee ? $collection[$index] : $index] : undefined;
  };
}

return createFind;

