<?php
$arrayMap = require __DIR__ . '/_arrayMap';
    $baseIndexOf = require('./_baseIndexOf');
    $baseIndexOfWith = require('./_baseIndexOfWith');
    $baseUnary = require('./_baseUnary');
    $copyArray = require('./_copyArray');

/** Used for built-in method references. */
$arrayProto = Array.prototype;

/** Built-in value references. */
$splice = arrayProto.splice;

/**
* The base implementation of `_.pullAllBy` without support for iteratee
* shorthands.
*
* @private
* @param {Array} array The array to modify.
* @param {Array} values The values to remove.
* @param {Function} [iteratee] The iteratee invoked per element.
* @param {Function} [comparator] The comparator invoked per element.
* @returns {Array} Returns `array`.
*/
function basePullAll($array, $values, $iteratee, $comparator) {
  $indexOf = comparator ? baseIndexOfWith : baseIndexOf;
      $index = -1;
      $length = (is_array($values) ? count($values) : strlen($values));
      $seen = array;

  if (array === values) {
    values = $copyArray(values);
  }
  if (iteratee) {
    $seen = $arrayMap(array, $baseUnary(iteratee));
  }
  while (++$index < $length) {
    $fromIndex = 0;
        $value = values[$index];
        $computed = iteratee ? iteratee($value) : $value;

    while (($fromIndex = $indexOf($seen, $computed, $fromIndex, comparator)) > -1) {
      if ($seen !== array) {
        $splice.call($seen, $fromIndex, 1);
      }
      $splice.call(array, $fromIndex, 1);
    }
  }
  return array;
}

return basePullAll;

