<?php
$nativeCreate = require __DIR__ . '/_nativeCreate';

/** Used to stand-in for `undefined` hash values. */
$HASH_UNDEFINED = '__lodash_hash_undefined__';

/**
* Sets the hash `key` to `value`.
*
* @private
* @name set
* @memberOf Hash
* @param {string} key The key of the value to set.
* @param {*} value The value to set.
* @returns {Object} Returns the hash instance.
*/
function hashSet($key, $value) {
  $data = this.__data__;
  this.size += this.has(key) ? 0 : 1;
  $data[key] = ($nativeCreate && value === null) ? $HASH_UNDEFINED : value;
  return this;
}

return hashSet;

