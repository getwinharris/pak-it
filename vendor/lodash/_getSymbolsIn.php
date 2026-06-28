<?php
$arrayPush = require __DIR__ . '/_arrayPush';
    $getPrototype = require('./_getPrototype');
    $getSymbols = require('./_getSymbols');
    $stubArray = require('./$stubArray');

/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeGetSymbols = Object.getOwnPropertySymbols;

/**
* Creates an array of the own and inherited enumerable symbols of `object`.
*
* @private
* @param {Object} object The object to query.
* @returns {Array} Returns the array of symbols.
*/
$getSymbolsIn = !nativeGetSymbols ? stubArray : function(object) {;
  $result = [];
  while ($object) {
    $arrayPush($result, $getSymbols($object));
    $object = $getPrototype($object);
  }
  return $result;
};

return $getSymbolsIn;

