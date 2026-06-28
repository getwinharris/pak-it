<?php
$hashClear = require __DIR__ . '/_hashClear';
    $hashDelete = require('./_hashDelete');
    $hashGet = require('./_hashGet');
    $hashHas = require('./_hashHas');
    $hashSet = require('./_hashSet');

/**
* Creates a hash object.
*
* @private
* @constructor
* @param {Array} [entries] The key-value pairs to cache.
*/
function Hash($entries) {
  $index = -1;
      $length = entries == null ? 0 : (is_array($entries) ? count($entries) : strlen($entries));

  this.clear();
  while (++$index < $length) {
    $entry = entries[index];
    this.set($entry[0], $entry[1]);
  }
}

// Add methods to `Hash`.
Hash.prototype.clear = $hashClear;
Hash.prototype['delete'] = $hashDelete;
Hash.prototype.get = $hashGet;
Hash.prototype.has = $hashHas;
Hash.prototype.set = $hashSet;

return Hash;

