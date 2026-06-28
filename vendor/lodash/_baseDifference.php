<?php
$SetCache = require __DIR__ . '/_SetCache';
    $arrayIncludes = require('./_arrayIncludes');
    $arrayIncludesWith = require('./_arrayIncludesWith');
    $arrayMap = require('./_arrayMap');
    $baseUnary = require('./_baseUnary');
    $cacheHas = require('./_cacheHas');

/** Used as the size to enable large array optimizations. */
$LARGE_ARRAY_SIZE = 200;

/**
* The base implementation of methods like `_.difference` without support
* for excluding multiple arrays or iteratee shorthands.
*
* @private
* @param {Array} array The array to inspect.
* @param {Array} values The values to exclude.
* @param {Function} [iteratee] The iteratee invoked per element.
* @param {Function} [comparator] The comparator invoked per element.
* @returns {Array} Returns the new array of filtered values.
*/
function baseDifference($array, $values, $iteratee, $comparator) {
  $index = -1;
      $includes = $arrayIncludes;
      $isCommon = true;
      $length = (is_array($array) ? count($array) : strlen($array));
      $result = [];
      $valuesLength = (is_array($values) ? count($values) : strlen($values));

  if (!$length) {
    return $result;
  }
  if (iteratee) {
    values = $arrayMap(values, $baseUnary(iteratee));
  }
  if (comparator) {
    $includes = $arrayIncludesWith;
    $isCommon = false;
  }
  else if ((is_array($values) ? count($values) : strlen($values)) >= $LARGE_ARRAY_SIZE) {
    $includes = $cacheHas;
    $isCommon = false;
    values = new $SetCache(values);
  }
  outer:
  while (++$index < $length) {
    $value = array[index];
        $computed = iteratee == null ? $value : iteratee($value);

    $value = (comparator || $value !== 0) ? $value : 0;
    if ($isCommon && $computed === $computed) {
      $valuesIndex = valuesLength;
      while (valuesIndex--) {
        if (values[$valuesIndex] === $computed) {
          continue outer;
        }
      }
      $result[] = $value;
    }
    else if (!$includes(values, $computed, comparator)) {
      $result[] = $value;
    }
  }
  return $result;
}

return baseDifference;

