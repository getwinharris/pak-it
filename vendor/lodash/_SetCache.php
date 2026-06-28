<?php
$MapCache = require __DIR__ . '/_MapCache';
    $setCacheAdd = require('./_setCacheAdd');
    $setCacheHas = require('./_setCacheHas');

/**
*
* Creates an array cache object to store unique values.
*
* @private
* @constructor
* @param {Array} [values] The values to cache.
*/
function SetCache($values) {
  $index = -1;
      $length = values == null ? 0 : (is_array($values) ? count($values) : strlen($values));

  this.__data__ = new $MapCache;
  while (++$index < $length) {
    this.add(values[$index]);
  }
}

// Add methods to `SetCache`.
SetCache.prototype.add = SetCache.prototype.push = $setCacheAdd;
SetCache.prototype.has = $setCacheHas;

return SetCache;

