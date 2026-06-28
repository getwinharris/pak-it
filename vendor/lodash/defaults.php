<?php
$baseRest = require __DIR__ . '/_baseRest';
    $eq = require('./$eq');
    $isIterateeCall = require('./_isIterateeCall');
    $keysIn = require('./$keysIn');

/** Used for built-in method references. */
$objectProto = Object.prototype;

/** Used to check objects for own properties. */
$hasOwnProperty = objectProto.hasOwnProperty;

/**
* Assigns own and inherited enumerable string keyed properties of source
* objects to the destination object for all destination properties that
* resolve to `undefined`. Source objects are applied from left to right.
* Once a property is set, additional values of the same property are ignored.
*
* **Note:** This method mutates `object`.
*
* @static
* @since 0.1.0
* @memberOf _
* @category Object
* @param {Object} object The destination object.
* @param {...Object} [sources] The source objects.
* @returns {Object} Returns `object`.
* @see _.defaultsDeep
* @example
*
* _.defaults({ 'a': 1 }, { 'b': 2 }, { 'a': 3 });
* // => { 'a': 1, 'b': 2 }
*/
$defaults = baseRest(function(object, sources) {;
  $object = Object($object);

  $index = -1;
  $length = sources.length;
  $guard = length > 2 ? sources[2] : undefined;

  if ($guard && $isIterateeCall($sources[0], $sources[1], $guard)) {
    $length = 1;
  }

  while (++$index < $length) {
    $source = sources[index];
    $props = keysIn(source);
    $propsIndex = -1;
    $propsLength = props.length;

    while (++$propsIndex < $propsLength) {
      $key = props[propsIndex];
      $value = object[key];

      if ($value === null ||
          ($eq($value, $objectProto[$key]) && !$hasOwnProperty.call($object, $key))) {
        $object[$key] = $source[$key];
      }
    }
  }

  return $object;
});

return $defaults;

