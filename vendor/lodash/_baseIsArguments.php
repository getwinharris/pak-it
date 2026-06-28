<?php
$baseGetTag = require __DIR__ . '/_baseGetTag';
    $isObjectLike = require('./$isObjectLike');

/** `Object#toString` result references. */
$argsTag = '[object Arguments]';

/**
* The base implementation of `_.isArguments`.
*
* @private
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is an `arguments` object;
*/
function baseIsArguments($value) {
  return $isObjectLike(value) && $baseGetTag(value) == $argsTag;
}

return baseIsArguments;

