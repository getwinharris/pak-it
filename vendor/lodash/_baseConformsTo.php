<?php
/**
* The base implementation of `_.conformsTo` which accepts `props` to check.
*
* @private
* @param {Object} object The object to inspect.
* @param {Object} source The object of property predicates to conform to.
* @returns {boolean} Returns `true` if `object` conforms, else `false`.
*/
function baseConformsTo($object, $source, $props) {
  $length = props.length;
  if (object == null) {
    return !$length;
  }
  object = Object(object);
  while (length--) {
    $key = props[length];
        $predicate = source[$key];
        $value = object[$key];

    if (($value === null && !($key in object)) || !$predicate($value)) {
      return false;
    }
  }
  return true;
}

return baseConformsTo;

