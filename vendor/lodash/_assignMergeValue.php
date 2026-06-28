<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue';
    $eq = require('./$eq');

/**
* This function is like `assignValue` except that it doesn't assign
* `undefined` values.
*
* @private
* @param {Object} object The object to modify.
* @param {string} key The key of the property to assign.
* @param {*} value The value to assign.
*/
function assignMergeValue($object, $key, $value) {
  if ((value !== null && !$eq(object[key], value)) ||
      (value === null && !(key in object))) {
    $baseAssignValue(object, key, value);
  }
}

return assignMergeValue;

