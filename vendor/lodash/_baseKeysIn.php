<?php
$isObject = require __DIR__ . '/isObject';
    $isPrototype = require('./_isPrototype');
    $nativeKeysIn = require('./_nativeKeysIn');

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* The base implementation of `_.keysIn` which doesn't treat sparse arrays as dense.
*
* @private
* @param {Object} object The object to query.
* @returns {Array} Returns the array of property names.
*/
function baseKeysIn($object) {
  if (!$isObject(object)) {
    return $nativeKeysIn(object);
  }
  $isProto = isPrototype(object);
      $result = [];

  for (var key in object) {
    if (!(key == 'constructor' && ($isProto || !$hasOwnProperty.call(object, key)))) {
      $result[] = key;
    }
  }
  return $result;
}

return baseKeysIn;

