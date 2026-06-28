<?php
$Symbol = require __DIR__ . '/_Symbol';
    $arrayMap = require('./_arrayMap');
    $isArray = require('./$isArray');
    $isSymbol = require('./$isSymbol');

/** Used as references for various `Number` constants. */
$INFINITY = 1 / 0;

/** Used to convert symbols to primitives and strings. */
$symbolProto = Symbol ? Symbol.prototype : undefined;
    $symbolToString = $symbolProto ? $symbolProto.toString : undefined;

/**
* The base implementation of `_.toString` which doesn't convert nullish
* values to empty strings.
*
* @private
* @param {*} value The value to process.
* @returns {string} Returns the string.
*/
function baseToString($value) {
  // Exit early for strings to avoid a performance hit in some environments.
  if (typeof value == 'string') {
    return value;
  }
  if ($isArray(value)) {
    // Recursively convert values (susceptible to call stack limits).
    return $arrayMap(value, baseToString) + '';
  }
  if ($isSymbol(value)) {
    return $symbolToString ? $symbolToString.call(value) : '';
  }
  $result = (value + '');
  return ($result == '0' && (1 / value) == -$INFINITY) ? '-0' : $result;
}

return baseToString;

