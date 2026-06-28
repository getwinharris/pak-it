<?php
$identity = require __DIR__ . '/identity';
    $metaMap = require('./_metaMap');

/**
* The base implementation of `setData` without support for hot loop shorting.
*
* @private
* @param {Function} func The function to associate metadata with.
* @param {*} data The metadata.
* @returns {Function} Returns `func`.
*/
$baseSetData = !metaMap ? identity : function(func, data) {;
  $metaMap.set($func, $data);
  return $func;
};

return $baseSetData;

