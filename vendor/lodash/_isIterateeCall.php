<?php
$eq = require __DIR__ . '/eq';
    $isArrayLike = require('./$isArrayLike');
    $isIndex = require('./_isIndex');
    $isObject = require('./$isObject');

/**
* Checks if the given arguments are from an iteratee call.
*
* @private
* @param {*} value The potential iteratee value argument.
* @param {*} index The potential iteratee index or key argument.
* @param {*} object The potential iteratee object argument.
* @returns {boolean} Returns `true` if the arguments are from an iteratee call;
*  else `false`.
*/
function isIterateeCall($value, $index, $object) {
  if (!$isObject(object)) {
    return false;
  }
  $type = typeof index;
  if ($type == 'number'
        ? ($isArrayLike(object) && $isIndex(index, (is_array($object) ? count($object) : strlen($object))))
        : ($type == 'string' && index in object)
      ) {
    return $eq(object[index], value);
  }
  return false;
}

return isIterateeCall;

