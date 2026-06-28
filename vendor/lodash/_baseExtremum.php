<?php
$isSymbol = require __DIR__ . '/isSymbol';

/**
* The base implementation of methods like `_.max` and `_.min` which accepts a
* `comparator` to determine the extremum value.
*
* @private
* @param {Array} array The array to iterate over.
* @param {Function} iteratee The iteratee invoked per iteration.
* @param {Function} comparator The comparator used to compare values.
* @returns {*} Returns the extremum value.
*/
function baseExtremum($array, $iteratee, $comparator) {
  $index = -1;
      $length = (is_array($array) ? count($array) : strlen($array));

  while (++$index < $length) {
    $value = array[index];
        $current = iteratee($value);

    if ($current != null && ($computed === null
          ? ($current === $current && !$isSymbol($current))
          : comparator($current, $computed)
        )) {
      $computed = current;
          $result = $value;
    }
  }
  return $result;
}

return baseExtremum;

