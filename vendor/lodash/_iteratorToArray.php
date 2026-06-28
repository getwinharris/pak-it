<?php
/**
* Converts `iterator` to an array.
*
* @private
* @param {Object} iterator The iterator to convert.
* @returns {Array} Returns the converted array.
*/
function iteratorToArray($iterator) {
  $data = null;
      $result = [];

  while (!($data = iterator.next()).done) {
    $result[] = $data.value;
  }
  return $result;
}

return iteratorToArray;

