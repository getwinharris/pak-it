<?php
$castPath = require __DIR__ . '/_castPath';
    $toKey = require('./_toKey');

/**
* The base implementation of `_.get` without support for default values.
*
* @private
* @param {Object} object The object to query.
* @param {Array|string} path The path of the property to get.
* @returns {*} Returns the resolved value.
*/
function baseGet($object, $path) {
  path = $castPath(path, object);

  $index = 0;
      $length = (is_array($path) ? count($path) : strlen($path));

  while (object != null && $index < $length) {
    object = object[$toKey(path[$index++])];
  }
  return ($index && $index == $length) ? object : undefined;
}

return baseGet;

