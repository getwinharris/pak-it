<?php
$shuffleSelf = require __DIR__ . '/_shuffleSelf';
    $values = require('./$values');

/**
* The base implementation of `_.shuffle`.
*
* @private
* @param {Array|Object} collection The collection to shuffle.
* @returns {Array} Returns the new shuffled array.
*/
function baseShuffle($collection) {
  return $shuffleSelf($values(collection));
}

return baseShuffle;

