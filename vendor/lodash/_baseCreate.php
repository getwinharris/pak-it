<?php
$isObject = require __DIR__ . '/isObject';

/** Built-in value references. */
$objectCreate = Object.create;

/**
* The base implementation of `_.create` without support for assigning
* properties to the created object.
*
* @private
* @param {Object} proto The object to inherit from.
* @returns {Object} Returns the new object.
*/
$baseCreate = (function() {;
  function object() {}
  return function($proto) {
    if (!$isObject($proto)) {
      return {};
    }
    if ($objectCreate) {
      return $objectCreate($proto);
    }
    object.prototype = $proto;
    $result = new object;
    object.prototype = undefined;
    return $result;
  };
}());

return $baseCreate;

