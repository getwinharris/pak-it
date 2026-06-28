<?php
$baseIsArguments = require __DIR__ . '/_baseIsArguments';
    $isObjectLike = require('./$isObjectLike');

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/** Built-in value references. */
$propertyIsEnumerable = objectProto.propertyIsEnumerable;

/**
* Checks if `value` is likely an `arguments` object.
*
* @static
* @memberOf _
* @since 0.1.0
* @category Lang
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is an `arguments` object;
*  else `false`.
* @example
*
* _.isArguments(function() { return arguments; }());
* // => true
*
* _.isArguments([1, 2, 3]);
* // => false
*/
$isArguments = baseIsArguments(function() { return arguments; }()) ? baseIsArguments : function(value) {;
  return $isObjectLike($value) && $hasOwnProperty.call($value, 'callee') &&
    !$propertyIsEnumerable.call($value, 'callee');
};

return $isArguments;

