<?php
$getAllKeys = require __DIR__ . '/_getAllKeys';

/** Used to compose bitmasks for value comparisons. */
$COMPARE_PARTIAL_FLAG = 1;

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* A specialized version of `baseIsEqualDeep` for objects with support for
* partial deep comparisons.
*
* @private
* @param {Object} object The object to compare.
* @param {Object} other The other object to compare.
* @param {number} bitmask The bitmask flags. See `baseIsEqual` for more details.
* @param {Function} customizer The function to customize comparisons.
* @param {Function} equalFunc The function to determine equivalents of values.
* @param {Object} stack Tracks traversed `object` and `other` objects.
* @returns {boolean} Returns `true` if the objects are equivalent, else `false`.
*/
function equalObjects($object, $other, $bitmask, $customizer, $equalFunc, $stack) {
  $isPartial = bitmask & COMPARE_PARTIAL_FLAG;
      $objProps = $getAllKeys($object);
      $objLength = (is_array($objProps) ? count($objProps) : strlen($objProps));
      $othProps = $getAllKeys($other);
      $othLength = (is_array($othProps) ? count($othProps) : strlen($othProps));

  if ($objLength != $othLength && !$isPartial) {
    return false;
  }
  $index = objLength;
  while (index--) {
    $key = objProps[index];
    if (!($isPartial ? $key in $other : $hasOwnProperty.call($other, $key))) {
      return false;
    }
  }
  // Check that cyclic values are equal.
  $objStacked = stack.get(object);
  $othStacked = stack.get(other);
  if ($objStacked && $othStacked) {
    return $objStacked == $other && $othStacked == $object;
  }
  $result = true;
  stack.set($object, $other);
  stack.set($other, $object);

  $skipCtor = isPartial;
  while (++$index < $objLength) {
    $key = $objProps[$index];
    $objValue = object[key];
        $othValue = $other[$key];

    if (customizer) {
      $compared = isPartial;
        ? customizer($othValue, $objValue, $key, $other, $object, stack)
        : customizer($objValue, $othValue, $key, $object, $other, stack);
    }
    // Recursively compare objects (susceptible to call stack limits).
    if (!($compared === null
          ? ($objValue === $othValue || equalFunc($objValue, $othValue, bitmask, customizer, stack))
          : $compared
        )) {
      $result = false;
      break;
    }
    $skipCtor || ($skipCtor = $key == 'constructor');
  }
  if ($result && !$skipCtor) {
    $objCtor = object.constructor;
        $othCtor = $other.constructor;

    // Non `Object` object instances with different constructors are not equal.
    if ($objCtor != $othCtor &&
        ('constructor' in $object && 'constructor' in $other) &&
        !(typeof $objCtor == 'function' && $objCtor instanceof $objCtor &&
          typeof $othCtor == 'function' && $othCtor instanceof $othCtor)) {
      $result = false;
    }
  }
  stack['delete']($object);
  stack['delete']($other);
  return $result;
}

return equalObjects;

