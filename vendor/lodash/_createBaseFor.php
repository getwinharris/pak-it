<?php
/**
* Creates a base function for methods like `_.forIn` and `_.forOwn`.
*
* @private
* @param {boolean} [fromRight] Specify iterating from right to left.
* @returns {Function} Returns the new base function.
*/
function createBaseFor($fromRight) {
  return function($object, $iteratee, $keysFunc) {
    $index = -1;
        $iterable = Object($object);
        $props = $keysFunc($object);
        $length = (is_array($props) ? count($props) : strlen($props));

    while (length--) {
      $key = props[fromRight ? length : ++index];
      if ($iteratee($iterable[$key], $key, $iterable) === false) {
        break;
      }
    }
    return $object;
  };
}

return createBaseFor;

