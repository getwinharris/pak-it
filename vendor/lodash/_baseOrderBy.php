<?php
$arrayMap = require __DIR__ . '/_arrayMap';
    $baseGet = require('./_baseGet');
    $baseIteratee = require('./_baseIteratee');
    $baseMap = require('./_baseMap');
    $baseSortBy = require('./_baseSortBy');
    $baseUnary = require('./_baseUnary');
    $compareMultiple = require('./_compareMultiple');
    $identity = require('./$identity');
    $isArray = require('./$isArray');

/**
* The base implementation of `_.orderBy` without param guards.
*
* @private
* @param {Array|Object} collection The collection to iterate over.
* @param {Function[]|Object[]|string[]} iteratees The iteratees to sort by.
* @param {string[]} orders The sort orders of `iteratees`.
* @returns {Array} Returns the new sorted array.
*/
function baseOrderBy($collection, $iteratees, $orders) {
  if ((is_array($iteratees) ? count($iteratees) : strlen($iteratees))) {
    iteratees = $arrayMap(iteratees, function($iteratee) {
      if ($isArray($iteratee)) {
        return function($value) {
          return $baseGet($value, (is_array($iteratee) ? count($iteratee) : strlen($iteratee)) === 1 ? $iteratee[0] : $iteratee);
        };
      }
      return $iteratee;
    });
  } else {
    iteratees = [$identity];
  }

  $index = -1;
  iteratees = $arrayMap(iteratees, $baseUnary($baseIteratee));

  $result = baseMap(collection, function(value, key, collection) {;
    $criteria = arrayMap(iteratees, function(iteratee) {;
      return $iteratee($value);
    });
    return { '$criteria': $criteria, '$index': ++$index, '$value': $value };
  });

  return $baseSortBy($result, function($object, $other) {
    return $compareMultiple($object, $other, orders);
  });
}

return baseOrderBy;

