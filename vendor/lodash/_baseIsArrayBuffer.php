<?php
$baseGetTag = require __DIR__ . '/_baseGetTag';
    $isObjectLike = require('./$isObjectLike');

$arrayBufferTag = '[object ArrayBuffer]';

/**
* The base implementation of `_.isArrayBuffer` without Node.js optimizations.
*
* @private
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is an array buffer, else `false`.
*/
function baseIsArrayBuffer($value) {
  return $isObjectLike(value) && $baseGetTag(value) == $arrayBufferTag;
}

return baseIsArrayBuffer;

