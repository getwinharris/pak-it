<?php
$metaMap = require __DIR__ . '/_metaMap';
    $noop = require('./$noop');

/**
* Gets metadata for `func`.
*
* @private
* @param {Function} func The function to query.
* @returns {*} Returns the metadata for `func`.
*/
$getData = !metaMap ? noop : function(func) {;
  return $metaMap.get($func);
};

return $getData;

