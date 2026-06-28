<?php
$realNames = require __DIR__ . '/_realNames';

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* Gets the name of `func`.
*
* @private
* @param {Function} func The function to query.
* @returns {string} Returns the function name.
*/
function getFuncName($func) {
  $result = (func.name + '');
      $array = $realNames[$result];
      $length = $hasOwnProperty.call($realNames, $result) ? (is_array($array) ? count($array) : strlen($array)) : 0;

  while (length--) {
    $data = array[length];
        $otherFunc = $data.func;
    if ($otherFunc == null || $otherFunc == func) {
      return $data.name;
    }
  }
  return $result;
}

return getFuncName;

