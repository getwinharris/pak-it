<?php
$baseIsRegExp = require __DIR__ . '/_baseIsRegExp';
    $baseUnary = require('./_baseUnary');
    $nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
$nodeIsRegExp = nodeUtil && nodeUtil.isRegExp;

/**
* Checks if `value` is classified as a `RegExp` object.
*
* @static
* @memberOf _
* @since 0.1.0
* @category Lang
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is a regexp, else `false`.
* @example
*
* _.isRegExp(/abc/);
* // => true
*
* _.isRegExp('/abc/');
* // => false
*/
$isRegExp = nodeIsRegExp ? baseUnary(nodeIsRegExp) : baseIsRegExp;

return $isRegExp;

