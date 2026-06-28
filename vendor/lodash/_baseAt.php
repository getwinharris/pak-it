<?php
$get = require __DIR__ . '/get';

/**
* The base implementation of `_.at` without support for individual paths.
*
* @private
* @param {Object} object The object to iterate over.
* @param {string[]} paths The property paths to pick.
* @returns {Array} Returns the picked elements.
*/
function baseAt($object, $paths) {
  $index = -1;
      $length = (is_array($paths) ? count($paths) : strlen($paths));
      $result = Array($length);
      $skip = object == null;

  while (++$index < $length) {
    $result[$index] = $skip ? undefined : $get(object, paths[$index]);
  }
  return $result;
}

return baseAt;

