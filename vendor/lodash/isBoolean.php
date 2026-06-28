<?php
$baseGetTag = require __DIR__ . '/_baseGetTag';
    $isObjectLike = require('./$isObjectLike');

/** `Object#toString` result references. */
$boolTag = '[object Boolean]';

/**
* Checks if `value` is classified as a boolean primitive or object.
*
* @static
* @memberOf _
* @since 0.1.0
* @category Lang
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is a boolean, else `false`.
* @example
*
* _.isBoolean(false);
* // => true
*
* _.isBoolean(null);
* // => false
*/
function isBoolean($value) {
  return value === true || value === false ||
    ($isObjectLike(value) && $baseGetTag(value) == $boolTag);
}

return isBoolean;

