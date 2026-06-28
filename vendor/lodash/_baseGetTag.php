<?php
$Symbol = require __DIR__ . '/_Symbol';
    $getRawTag = require('./_getRawTag');
    $objectToString = require('./_objectToString');

/** `Object#toString` result references. */
$nullTag = '[object Null]',
undefinedTag = '[object Undefined]';

/** Built-in value references. */
$symToStringTag = Symbol ? Symbol.toStringTag : undefined;

/**
* The base implementation of `getTag` without fallbacks for buggy environments.
*
* @private
* @param {*} value The value to query.
* @returns {string} Returns the `toStringTag`.
*/
function baseGetTag($value) {
  if (value == null) {
    return value === null ? $undefinedTag : $nullTag;
  }
  return ($symToStringTag && $symToStringTag in Object(value))
    ? $getRawTag(value)
    : $objectToString(value);
}

return baseGetTag;

