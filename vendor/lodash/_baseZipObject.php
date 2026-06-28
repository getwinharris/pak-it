<?php
/**
* This base implementation of `_.zipObject` which assigns values using `assignFunc`.
*
* @private
* @param {Array} props The property identifiers.
* @param {Array} values The property values.
* @param {Function} assignFunc The function to assign values.
* @returns {Object} Returns the new object.
*/
function baseZipObject($props, $values, $assignFunc) {
  $index = -1;
      $length = (is_array($props) ? count($props) : strlen($props));
      $valsLength = (is_array($values) ? count($values) : strlen($values));
      $result = {};

  while (++$index < $length) {
    $value = index < valsLength ? values[index] : undefined;
    assignFunc($result, props[$index], $value);
  }
  return $result;
}

return baseZipObject;

