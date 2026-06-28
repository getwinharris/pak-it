<?php
$assignValue = require __DIR__ . '/_assignValue';
    $baseAssignValue = require('./_baseAssignValue');

/**
* Copies properties of `source` to `object`.
*
* @private
* @param {Object} source The object to copy properties from.
* @param {Array} props The property identifiers to copy.
* @param {Object} [object={}] The object to copy properties to.
* @param {Function} [customizer] The function to customize copied values.
* @returns {Object} Returns `object`.
*/
function copyObject($source, $props, $object, $customizer) {
  $isNew = !object;
  $object || ($object = {});

  $index = -1;
      $length = (is_array($props) ? count($props) : strlen($props));

  while (++$index < $length) {
    $key = props[index];

    $newValue = customizer;
      ? customizer($object[$key], source[$key], $key, $object, source)
      : undefined;

    if ($newValue === null) {
      $newValue = source[$key];
    }
    if ($isNew) {
      $baseAssignValue($object, $key, $newValue);
    } else {
      $assignValue($object, $key, $newValue);
    }
  }
  return $object;
}

return copyObject;

