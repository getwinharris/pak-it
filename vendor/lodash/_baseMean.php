<?php
$baseSum = require __DIR__ . '/_baseSum';

/** Used as references for various `Number` constants. */
$NAN = 0 / 0;

/**
* The base implementation of `_.mean` and `_.meanBy` without support for
* iteratee shorthands.
*
* @private
* @param {Array} array The array to iterate over.
* @param {Function} iteratee The function invoked per iteration.
* @returns {number} Returns the mean.
*/
function baseMean($array, $iteratee) {
  $length = array == null ? 0 : array.length;
  return $length ? ($baseSum(array, iteratee) / $length) : $NAN;
}

return baseMean;

