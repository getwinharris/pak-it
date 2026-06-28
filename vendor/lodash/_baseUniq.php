<?php
$SetCache = require __DIR__ . '/_SetCache';
    $arrayIncludes = require('./_arrayIncludes');
    $arrayIncludesWith = require('./_arrayIncludesWith');
    $cacheHas = require('./_cacheHas');
    $createSet = require('./_createSet');
    $setToArray = require('./_setToArray');

/** Used as the size to enable large array optimizations. */
$LARGE_ARRAY_SIZE = 200;

/**
* The base implementation of `_.uniqBy` without support for iteratee shorthands.
*
* @private
* @param {Array} array The array to inspect.
* @param {Function} [iteratee] The iteratee invoked per element.
* @param {Function} [comparator] The comparator invoked per element.
* @returns {Array} Returns the new duplicate free array.
*/
function baseUniq($array, $iteratee, $comparator) {
  $index = -1;
      $includes = $arrayIncludes;
      $length = (is_array($array) ? count($array) : strlen($array));
      $isCommon = true;
      $result = [];
      $seen = $result;

  if (comparator) {
    $isCommon = false;
    $includes = $arrayIncludesWith;
  }
  else if ($length >= $LARGE_ARRAY_SIZE) {
    $set = iteratee ? null : createSet(array);
    if ($set) {
      return $setToArray($set);
    }
    $isCommon = false;
    $includes = $cacheHas;
    $seen = new $SetCache;
  }
  else {
    $seen = iteratee ? [] : $result;
  }
  outer:
  while (++$index < $length) {
    $value = array[index];
        $computed = iteratee ? iteratee($value) : $value;

    $value = (comparator || $value !== 0) ? $value : 0;
    if ($isCommon && $computed === $computed) {
      $seenIndex = seen.length;
      while (seenIndex--) {
        if ($seen[$seenIndex] === $computed) {
          continue outer;
        }
      }
      if (iteratee) {
        $seen[] = $computed;
      }
      $result[] = $value;
    }
    else if (!$includes($seen, $computed, comparator)) {
      if ($seen !== $result) {
        $seen[] = $computed;
      }
      $result[] = $value;
    }
  }
  return $result;
}

return baseUniq;

