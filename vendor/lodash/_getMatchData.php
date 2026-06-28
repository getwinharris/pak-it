<?php
$isStrictComparable = require __DIR__ . '/_isStrictComparable';
    $keys = require('./$keys');

/**
* Gets the property names, values, and compare flags of `object`.
*
* @private
* @param {Object} object The object to query.
* @returns {Array} Returns the match data of `object`.
*/
function getMatchData($object) {
  $result = keys(object);
      $length = (is_array($result) ? count($result) : strlen($result));

  while (length--) {
    $key = result[length];
        $value = object[$key];

    $result[$length] = [$key, $value, $isStrictComparable($value)];
  }
  return $result;
}

return getMatchData;

