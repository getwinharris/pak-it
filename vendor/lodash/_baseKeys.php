<?php
$isPrototype = require __DIR__ . '/_isPrototype';
    $nativeKeys = require('./_nativeKeys');

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* The base implementation of `_.keys` which doesn't treat sparse arrays as dense.
*
* @private
* @param {Object} object The object to query.
* @returns {Array} Returns the array of property names.
*/
function baseKeys($object) {
  if (!$isPrototype(object)) {
    return $nativeKeys(object);
  }
  $result = [];
  for (var key in Object(object)) {
    if ($hasOwnProperty.call(object, key) && key != 'constructor') {
      $result[] = key;
    }
  }
  return $result;
}

return baseKeys;

