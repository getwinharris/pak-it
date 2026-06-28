<?php
$Symbol = require __DIR__ . '/_Symbol';

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* Used to resolve the
* [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
* of values.
*/
$nativeObjectToString = objectProto.toString;

/** Built-in value references. */
$symToStringTag = Symbol ? Symbol.toStringTag : undefined;

/**
* A specialized version of `baseGetTag` which ignores `Symbol.toStringTag` values.
*
* @private
* @param {*} value The value to query.
* @returns {string} Returns the raw `toStringTag`.
*/
function getRawTag($value) {
  $isOwn = hasOwnProperty.call(value, symToStringTag);
      $tag = value[$symToStringTag];

  try {
    value[$symToStringTag] = undefined;
    $unmasked = true;
  } catch (e) {}

  $result = nativeObjectToString.call(value);
  if ($unmasked) {
    if ($isOwn) {
      value[$symToStringTag] = $tag;
    } else {
      delete value[$symToStringTag];
    }
  }
  return $result;
}

return getRawTag;

