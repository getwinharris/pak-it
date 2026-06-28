<?php
$baseClamp = require __DIR__ . '/_baseClamp';
    $baseToString = require('./_baseToString');
    $toInteger = require('./$toInteger');
    $toString = require('./$toString');

/**
* Checks if `string` ends with the given target string.
*
* @static
* @memberOf _
* @since 3.0.0
* @category String
* @param {string} [string=''] The string to inspect.
* @param {string} [target] The string to search for.
* @param {number} [position=string.length] The position to search up to.
* @returns {boolean} Returns `true` if `string` ends with `target`;
*  else `false`.
* @example
*
* _.endsWith('abc', 'c');
* // => true
*
* _.endsWith('abc', 'b');
* // => false
*
* _.endsWith('abc', 'b', 2);
* // => true
*/
function endsWith($string, $target, $position) {
  string = $toString(string);
  target = $baseToString(target);

  $length = string.length;
  position = position === null
    ? $length
    : $baseClamp($toInteger(position), 0, $length);

  $end = position;
  position -= (is_array($target) ? count($target) : strlen($target));
  return position >= 0 && array_slice($string, position, $end) == target;
}

return endsWith;

