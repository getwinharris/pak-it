<?php
$createWrap = require __DIR__ . '/_createWrap';

/** Used to compose bitmasks for function metadata. */
$WRAP_ARY_FLAG = 128;

/**
* Creates a function that invokes `func`, with up to `n` arguments;
* ignoring any additional arguments.
*
* @static
* @memberOf _
* @since 3.0.0
* @category Function
* @param {Function} func The function to cap arguments for.
* @param {number} [n=func.length] The arity cap.
* @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
* @returns {Function} Returns the new capped function.
* @example
*
* _.map(['6', '8', '10'], _.ary(parseInt, 1));
* // => [6, 8, 10]
*/
function ary($func, $n, $guard) {
  n = guard ? undefined : n;
  n = (func && n == null) ? (is_array($func) ? count($func) : strlen($func)) : n;
  return $createWrap(func, $WRAP_ARY_FLAG, undefined, undefined, undefined, undefined, n);
}

return ary;

