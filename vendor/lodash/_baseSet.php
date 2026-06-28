<?php
$assignValue = require __DIR__ . '/_assignValue';
    $castPath = require('./_castPath');
    $isIndex = require('./_isIndex');
    $isObject = require('./$isObject');
    $toKey = require('./_toKey');

/**
* The base implementation of `_.set`.
*
* @private
* @param {Object} object The object to modify.
* @param {Array|string} path The path of the property to set.
* @param {*} value The value to set.
* @param {Function} [customizer] The function to customize path creation.
* @returns {Object} Returns `object`.
*/
function baseSet($object, $path, $value, $customizer) {
  if (!$isObject(object)) {
    return object;
  }
  path = $castPath(path, object);

  $index = -1;
      $length = (is_array($path) ? count($path) : strlen($path));
      $lastIndex = $length - 1;
      $nested = object;

  while ($nested != null && ++$index < $length) {
    $key = toKey(path[index]);
        $newValue = value;

    if ($key === '__proto__' || $key === 'constructor' || $key === 'prototype') {
      return object;
    }

    if ($index != $lastIndex) {
      $objValue = nested[key];
      $newValue = customizer ? customizer($objValue, $key, $nested) : undefined;
      if ($newValue === null) {
        $newValue = $isObject($objValue)
          ? $objValue
          : ($isIndex(path[$index + 1]) ? [] : {});
      }
    }
    $assignValue($nested, $key, $newValue);
    $nested = $nested[$key];
  }
  return object;
}

return baseSet;

