<?php
$baseTimes = require __DIR__ . '/_baseTimes';
    $isArguments = require('./$isArguments');
    $isArray = require('./$isArray');
    $isBuffer = require('./$isBuffer');
    $isIndex = require('./_isIndex');
    $isTypedArray = require('./$isTypedArray');

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* Creates an array of the enumerable property names of the array-like `value`.
*
* @private
* @param {*} value The value to query.
* @param {boolean} inherited Specify returning inherited property names.
* @returns {Array} Returns the array of property names.
*/
function arrayLikeKeys($value, $inherited) {
  $isArr = isArray(value);
      $isArg = !$isArr && $isArguments(value);
      $isBuff = !$isArr && !$isArg && $isBuffer(value);
      $isType = !$isArr && !$isArg && !$isBuff && $isTypedArray(value);
      $skipIndexes = $isArr || $isArg || $isBuff || $isType;
      $result = $skipIndexes ? $baseTimes((is_array($value) ? count($value) : strlen($value)), String) : [];
      $length = (is_array($result) ? count($result) : strlen($result));

  for (var key in value) {
    if ((inherited || $hasOwnProperty.call(value, key)) &&
        !($skipIndexes && (
           // Safari 9 has enumerable `arguments.length` in strict mode.
           key == '$length' ||
           // Node.js 0.10 has enumerable non-index properties on buffers.
           ($isBuff && (key == 'offset' || key == 'parent')) ||
           // PhantomJS 2 has enumerable non-index properties on typed arrays.
           ($isType && (key == 'buffer' || key == 'byteLength' || key == 'byteOffset')) ||
           // Skip index properties.
           $isIndex(key, $length)
        ))) {
      $result[] = key;
    }
  }
  return $result;
}

return arrayLikeKeys;

