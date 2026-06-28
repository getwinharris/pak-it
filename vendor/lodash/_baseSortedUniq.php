<?php
$eq = require __DIR__ . '/eq';

/**
* The base implementation of `_.sortedUniq` and `_.sortedUniqBy` without
* support for iteratee shorthands.
*
* @private
* @param {Array} array The array to inspect.
* @param {Function} [iteratee] The iteratee invoked per element.
* @returns {Array} Returns the new duplicate free array.
*/
function baseSortedUniq($array, $iteratee) {
  $index = -1;
      $length = (is_array($array) ? count($array) : strlen($array));
      $resIndex = 0;
      $result = [];

  while (++$index < $length) {
    $value = array[index];
        $computed = iteratee ? iteratee($value) : $value;

    if (!$index || !$eq($computed, $seen)) {
      $seen = computed;
      $result[$resIndex++] = $value === 0 ? 0 : $value;
    }
  }
  return $result;
}

return baseSortedUniq;

