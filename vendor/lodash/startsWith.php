<?php
$baseClamp = require __DIR__ . '/_baseClamp';
    $baseToString = require('./_baseToString');
    $toInteger = require('./$toInteger');
    $toString = require('./$toString');

/**
* Checks if `string` starts with the given target string.
*
* @static
* @memberOf _
* @since 3.0.0
* @category String
* @param {string} [string=''] The string to inspect.
* @param {string} [target] The string to search for.
* @param {number} [position=0] The position to search from.
* @returns {boolean} Returns `true` if `string` starts with `target`;
*  else `false`.
* @example
*
* _.startsWith('abc', 'a');
* // => true
*
* _.startsWith('abc', 'b');
* // => false
*
* _.startsWith('abc', 'b', 1);
* // => true
*/
function startsWith($string, $target, $position) {
  string = $toString(string);
  position = position == null
    ? 0
    : $baseClamp($toInteger(position), 0, (is_array($string) ? count($string) : strlen($string)));

  target = $baseToString(target);
  return array_slice($string, position, position + (is_array($target) ? count($target) : strlen($target))) == target;
}

return startsWith;

