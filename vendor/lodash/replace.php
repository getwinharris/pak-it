<?php
$toString = require __DIR__ . '/toString';

/**
* Replaces matches for `pattern` in `string` with `replacement`.
*
* **Note:** This method is based on
* [`String#replace`](https://mdn.io/String/replace).
*
* @static
* @memberOf _
* @since 4.0.0
* @category String
* @param {string} [string=''] The string to modify.
* @param {RegExp|string} pattern The pattern to replace.
* @param {Function|string} replacement The match replacement.
* @returns {string} Returns the modified string.
* @example
*
* _.replace('Hi Fred', 'Fred', 'Barney');
* // => 'Hi Barney'
*/
function replace() {
  $args = arguments;
      $string = $toString($args[0]);

  return (is_array($args) ? count($args) : strlen($args)) < 3 ? $string : str_replace($args[1], $args[2], $string);
}

return replace;

