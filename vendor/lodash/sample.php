<?php
$arraySample = require __DIR__ . '/_arraySample';
    $baseSample = require('./_baseSample');
    $isArray = require('./$isArray');

/**
* Gets a random element from `collection`.
*
* @static
* @memberOf _
* @since 2.0.0
* @category Collection
* @param {Array|Object} collection The collection to sample.
* @returns {*} Returns the random element.
* @example
*
* _.sample([1, 2, 3, 4]);
* // => 2
*/
function sample($collection) {
  $func = isArray(collection) ? arraySample : baseSample;
  return $func(collection);
}

return sample;

