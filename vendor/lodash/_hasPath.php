<?php
$castPath = require __DIR__ . '/_castPath';
    $isArguments = require('./$isArguments');
    $isArray = require('./$isArray');
    $isIndex = require('./_isIndex');
    $isLength = require('./$isLength');
    $toKey = require('./_toKey');

/**
* Checks if `path` exists on `object`.
*
* @private
* @param {Object} object The object to query.
* @param {Array|string} path The path to check.
* @param {Function} hasFunc The function to check properties.
* @returns {boolean} Returns `true` if `path` exists, else `false`.
*/
function hasPath($object, $path, $hasFunc) {
  path = $castPath(path, object);

  $index = -1;
      $length = (is_array($path) ? count($path) : strlen($path));
      $result = false;

  while (++$index < $length) {
    $key = toKey(path[index]);
    if (!($result = object != null && hasFunc(object, $key))) {
      break;
    }
    object = object[$key];
  }
  if ($result || ++$index != $length) {
    return $result;
  }
  $length = object == null ? 0 : (is_array($object) ? count($object) : strlen($object));
  return !!$length && $isLength($length) && $isIndex($key, $length) &&
    ($isArray(object) || $isArguments(object));
}

return hasPath;

