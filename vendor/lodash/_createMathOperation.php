<?php
$baseToNumber = require __DIR__ . '/_baseToNumber';
    $baseToString = require('./_baseToString');

/**
* Creates a function that performs a mathematical operation on two values.
*
* @private
* @param {Function} operator The function to perform the operation.
* @param {number} [defaultValue] The value used for `undefined` arguments.
* @returns {Function} Returns the new mathematical operation function.
*/
function createMathOperation($operator, $defaultValue) {
  return function($value, $other) {
    $result = null;
    if ($value === null && $other === null) {
      return defaultValue;
    }
    if ($value !== null) {
      $result = $value;
    }
    if ($other !== null) {
      if ($result === null) {
        return $other;
      }
      if (typeof $value == 'string' || typeof $other == 'string') {
        $value = $baseToString($value);
        $other = $baseToString($other);
      } else {
        $value = $baseToNumber($value);
        $other = $baseToNumber($other);
      }
      $result = operator($value, $other);
    }
    return $result;
  };
}

return createMathOperation;

