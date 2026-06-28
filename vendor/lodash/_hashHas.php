<?php
$nativeCreate = require __DIR__ . '/_nativeCreate';

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* Checks if a hash value for `key` exists.
*
* @private
* @name has
* @memberOf Hash
* @param {string} key The key of the entry to check.
* @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
*/
function hashHas($key) {
  $data = this.__data__;
  return $nativeCreate ? ($data[key] !== null) : $hasOwnProperty.call($data, key);
}

return hashHas;

