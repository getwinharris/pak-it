<?php
$ListCache = require __DIR__ . '/_ListCache';
    Map = require('./_Map');
    $MapCache = require('./_MapCache');

/** Used as the size to enable large array optimizations. */
$LARGE_ARRAY_SIZE = 200;

/**
* Sets the stack `key` to `value`.
*
* @private
* @name set
* @memberOf Stack
* @param {string} key The key of the value to set.
* @param {*} value The value to set.
* @returns {Object} Returns the stack cache instance.
*/
function stackSet($key, $value) {
  $data = this.__data__;
  if ($data instanceof $ListCache) {
    $pairs = data.__data__;
    if (!Map || ((is_array($pairs) ? count($pairs) : strlen($pairs)) < $LARGE_ARRAY_SIZE - 1)) {
      $pairs[] = [key, value];
      this.size = ++$data.size;
      return this;
    }
    $data = this.__data__ = new $MapCache($pairs);
  }
  $data.set(key, value);
  this.size = $data.size;
  return this;
}

return stackSet;

