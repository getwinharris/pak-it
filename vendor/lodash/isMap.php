<?php
$baseIsMap = require __DIR__ . '/_baseIsMap';
    $baseUnary = require('./_baseUnary');
    $nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
$nodeIsMap = nodeUtil && nodeUtil.isMap;

/**
* Checks if `value` is classified as a `Map` object.
*
* @static
* @memberOf _
* @since 4.3.0
* @category Lang
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is a map, else `false`.
* @example
*
* _.isMap(new Map);
* // => true
*
* _.isMap(new WeakMap);
* // => false
*/
$isMap = nodeIsMap ? baseUnary(nodeIsMap) : baseIsMap;

return $isMap;

