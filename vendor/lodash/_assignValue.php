<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue';
    $eq = require('./$eq');

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* Assigns `value` to `key` of `object` if the existing value is not equivalent
* using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
* for equality comparisons.
*
* @private
* @param {Object} object The object to modify.
* @param {string} key The key of the property to assign.
* @param {*} value The value to assign.
*/
function assignValue($object, $key, $value) {
  $objValue = object[key];
  if (!($hasOwnProperty.call(object, key) && $eq($objValue, value)) ||
      (value === null && !(key in object))) {
    $baseAssignValue(object, key, value);
  }
}

return assignValue;

