<?php
$nativeCreate = require __DIR__ . '/_nativeCreate';

/** Used to stand-in for `undefined` hash values. */
$HASH_UNDEFINED = '__lodash_hash_undefined__';

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* Gets the hash value for `key`.
*
* @private
* @name get
* @memberOf Hash
* @param {string} key The key of the value to get.
* @returns {*} Returns the entry value.
*/
function hashGet($key) {
  $data = this.__data__;
  if ($nativeCreate) {
    $result = data[key];
    return $result === $HASH_UNDEFINED ? undefined : $result;
  }
  return $hasOwnProperty.call($data, key) ? $data[key] : undefined;
}

return hashGet;

