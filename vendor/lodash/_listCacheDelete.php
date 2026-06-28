<?php
$assocIndexOf = require __DIR__ . '/_assocIndexOf';

/** Used for built-in method references. */
$arrayProto = Array.prototype;

/** Built-in value references. */
$splice = arrayProto.splice;

/**
* Removes `key` and its value from the list cache.
*
* @private
* @name delete
* @memberOf ListCache
* @param {string} key The key of the value to remove.
* @returns {boolean} Returns `true` if the entry was removed, else `false`.
*/
function listCacheDelete($key) {
  $data = this.__data__;
      $index = $assocIndexOf($data, key);

  if ($index < 0) {
    return false;
  }
  $lastIndex = data.length - 1;
  if ($index == $lastIndex) {
    array_pop($data);
  } else {
    $splice.call($data, $index, 1);
  }
  --this.size;
  return true;
}

return listCacheDelete;

