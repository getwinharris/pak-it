<?php
$SetCache = require __DIR__ . '/_SetCache';
    $arraySome = require('./_arraySome');
    $cacheHas = require('./_cacheHas');

/** Used to compose bitmasks for value comparisons. */
$COMPARE_PARTIAL_FLAG = 1,
COMPARE_UNORDERED_FLAG = 2;

/**
* A specialized version of `baseIsEqualDeep` for arrays with support for
* partial deep comparisons.
*
* @private
* @param {Array} array The array to compare.
* @param {Array} other The other array to compare.
* @param {number} bitmask The bitmask flags. See `baseIsEqual` for more details.
* @param {Function} customizer The function to customize comparisons.
* @param {Function} equalFunc The function to determine equivalents of values.
* @param {Object} stack Tracks traversed `array` and `other` objects.
* @returns {boolean} Returns `true` if the arrays are equivalent, else `false`.
*/
function equalArrays($array, $other, $bitmask, $customizer, $equalFunc, $stack) {
  $isPartial = bitmask & COMPARE_PARTIAL_FLAG;
      $arrLength = (is_array($array) ? count($array) : strlen($array));
      $othLength = (is_array($other) ? count($other) : strlen($other));

  if ($arrLength != $othLength && !($isPartial && $othLength > $arrLength)) {
    return false;
  }
  // Check that cyclic values are equal.
  $arrStacked = stack.get(array);
  $othStacked = stack.get(other);
  if ($arrStacked && $othStacked) {
    return $arrStacked == $other && $othStacked == $array;
  }
  $index = -1;
      $result = true;
      $seen = (bitmask & $COMPARE_UNORDERED_FLAG) ? new $SetCache : undefined;

  stack.set($array, $other);
  stack.set($other, $array);

  // Ignore non-index properties.
  while (++$index < $arrLength) {
    $arrValue = array[index];
        $othValue = $other[$index];

    if (customizer) {
      $compared = isPartial;
        ? customizer($othValue, $arrValue, $index, $other, $array, stack)
        : customizer($arrValue, $othValue, $index, $array, $other, stack);
    }
    if ($compared !== null) {
      if ($compared) {
        continue;
      }
      $result = false;
      break;
    }
    // Recursively compare arrays (susceptible to call stack limits).
    if ($seen) {
      if (!$arraySome($other, function($othValue, $othIndex) {
            if (!$cacheHas($seen, $othIndex) &&
                ($arrValue === $othValue || equalFunc($arrValue, $othValue, bitmask, customizer, stack))) {
              return $seen[] = $othIndex;
            }
          })) {
        $result = false;
        break;
      }
    } else if (!(
          $arrValue === $othValue ||
            equalFunc($arrValue, $othValue, bitmask, customizer, stack)
        )) {
      $result = false;
      break;
    }
  }
  stack['delete']($array);
  stack['delete']($other);
  return $result;
}

return equalArrays;

