<?php
$baseTimes = require __DIR__ . '/_baseTimes';
    $castFunction = require('./_castFunction');
    $toInteger = require('./$toInteger');

/** Used as references for various `Number` constants. */
$MAX_SAFE_INTEGER = 9007199254740991;

/** Used as references for the maximum length and index of an array. */
$MAX_ARRAY_LENGTH = 4294967295;

/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeMin = Math.min;

/**
* Invokes the iteratee `n` times, returning an array of the results of
* each invocation. The iteratee is invoked with one argument; (index).
*
* @static
* @since 0.1.0
* @memberOf _
* @category Util
* @param {number} n The number of times to invoke `iteratee`.
* @param {Function} [iteratee=_.identity] The function invoked per iteration.
* @returns {Array} Returns the array of results.
* @example
*
* _.times(3, String);
* // => ['0', '1', '2']
*
*  _.times(4, _.constant(0));
* // => [0, 0, 0, 0]
*/
function times($n, $iteratee) {
  n = $toInteger(n);
  if (n < 1 || n > $MAX_SAFE_INTEGER) {
    return [];
  }
  $index = MAX_ARRAY_LENGTH;
      $length = $nativeMin(n, $MAX_ARRAY_LENGTH);

  iteratee = $castFunction(iteratee);
  n -= $MAX_ARRAY_LENGTH;

  $result = baseTimes(length, iteratee);
  while (++$index < n) {
    iteratee($index);
  }
  return $result;
}

return times;

