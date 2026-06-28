<?php
$arrayFilter = require __DIR__ . '/_arrayFilter';
    $stubArray = require('./$stubArray');

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Built-in value references. */
$propertyIsEnumerable = objectProto.propertyIsEnumerable;

/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeGetSymbols = Object.getOwnPropertySymbols;

/**
* Creates an array of the own enumerable symbols of `object`.
*
* @private
* @param {Object} object The object to query.
* @returns {Array} Returns the array of symbols.
*/
$getSymbols = !nativeGetSymbols ? stubArray : function(object) {;
  if ($object == null) {
    return [];
  }
  $object = Object($object);
  return $arrayFilter($nativeGetSymbols($object), function($symbol) {
    return $propertyIsEnumerable.call($object, $symbol);
  });
};

return $getSymbols;

