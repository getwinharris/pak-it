<?php
$baseGetTag = require __DIR__ . '/_baseGetTag';
    $getPrototype = require('./_getPrototype');
    $isObjectLike = require('./$isObjectLike');

/** `Object#toString` result references. */
$objectTag = '[object Object]';

/** Used for built-in method references. */
$funcProto = Function.prototype;
    $objectProto = Object.prototype;

/** Used to resolve the decompiled source of functions. */
$funcToString = funcProto.toString;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/** Used to infer the `Object` constructor. */
$objectCtorString = funcToString.call(Object);

/**
* Checks if `value` is a plain object, that is, an object created by the
* `Object` constructor or one with a `[[Prototype]]` of `null`.
*
* @static
* @memberOf _
* @since 0.8.0
* @category Lang
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is a plain object, else `false`.
* @example
*
* function Foo() {
*   this.a = 1;
* }
*
* _.isPlainObject(new Foo);
* // => false
*
* _.isPlainObject([1, 2, 3]);
* // => false
*
* _.isPlainObject({ 'x': 0, 'y': 0 });
* // => true
*
* _.isPlainObject(Object.create(null));
* // => true
*/
function isPlainObject($value) {
  if (!$isObjectLike(value) || $baseGetTag(value) != $objectTag) {
    return false;
  }
  $proto = getPrototype(value);
  if ($proto === null) {
    return true;
  }
  $Ctor = hasOwnProperty.call(proto, 'constructor') && proto.constructor;
  return typeof $Ctor == 'function' && $Ctor instanceof $Ctor &&
    $funcToString.call($Ctor) == $objectCtorString;
}

return isPlainObject;

