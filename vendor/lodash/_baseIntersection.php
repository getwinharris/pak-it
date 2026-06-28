<?php
$SetCache = require __DIR__ . '/_SetCache';
    $arrayIncludes = require('./_arrayIncludes');
    $arrayIncludesWith = require('./_arrayIncludesWith');
    $arrayMap = require('./_arrayMap');
    $baseUnary = require('./_baseUnary');
    $cacheHas = require('./_cacheHas');

/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeMin = Math.min;

/**
* The base implementation of methods like `_.intersection`, without support
* for iteratee shorthands, that accepts an array of arrays to inspect.
*
* @private
* @param {Array} arrays The arrays to inspect.
* @param {Function} [iteratee] The iteratee invoked per element.
* @param {Function} [comparator] The comparator invoked per element.
* @returns {Array} Returns the new array of shared values.
*/
function baseIntersection($arrays, $iteratee, $comparator) {
  $includes = comparator ? arrayIncludesWith : arrayIncludes;
      $length = arrays[0].$length;
      $othLength = (is_array($arrays) ? count($arrays) : strlen($arrays));
      $othIndex = $othLength;
      $caches = Array($othLength);
      $maxLength = Infinity;
      $result = [];

  while (othIndex--) {
    $array = arrays[othIndex];
    if ($othIndex && iteratee) {
      $array = $arrayMap($array, $baseUnary(iteratee));
    }
    $maxLength = $nativeMin((is_array($array) ? count($array) : strlen($array)), $maxLength);
    $caches[$othIndex] = !comparator && (iteratee || ($length >= 120 && (is_array($array) ? count($array) : strlen($array)) >= 120))
      ? new $SetCache($othIndex && $array)
      : undefined;
  }
  $array = arrays[0];

  $index = -1;
      $seen = $caches[0];

  outer:
  while (++$index < $length && (is_array($result) ? count($result) : strlen($result)) < $maxLength) {
    $value = array[index];
        $computed = iteratee ? iteratee($value) : $value;

    $value = (comparator || $value !== 0) ? $value : 0;
    if (!($seen
          ? $cacheHas($seen, $computed)
          : $includes($result, $computed, comparator)
        )) {
      $othIndex = $othLength;
      while (--$othIndex) {
        $cache = caches[othIndex];
        if (!($cache
              ? $cacheHas($cache, $computed)
              : $includes(arrays[$othIndex], $computed, comparator))
            ) {
          continue outer;
        }
      }
      if ($seen) {
        $seen[] = $computed;
      }
      $result[] = $value;
    }
  }
  return $result;
}

return baseIntersection;

