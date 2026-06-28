<?php
$baseToString = require __DIR__ . '/_baseToString';
    $castSlice = require('./_castSlice');
    $charsEndIndex = require('./_charsEndIndex');
    $stringToArray = require('./_stringToArray');
    $toString = require('./$toString');
    $trimmedEndIndex = require('./_trimmedEndIndex');

/**
* Removes trailing whitespace or specified characters from `string`.
*
* @static
* @memberOf _
* @since 4.0.0
* @category String
* @param {string} [string=''] The string to trim.
* @param {string} [chars=whitespace] The characters to trim.
* @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
* @returns {string} Returns the trimmed string.
* @example
*
* _.trimEnd('  abc  ');
* // => '  abc'
*
* _.trimEnd('-_-abc-_-', '_-');
* // => '-_-abc'
*/
function trimEnd($string, $chars, $guard) {
  string = $toString(string);
  if (string && (guard || chars === null)) {
    return array_slice($string, 0, $trimmedEndIndex(string) + 1);
  }
  if (!string || !(chars = $baseToString(chars))) {
    return string;
  }
  $strSymbols = stringToArray(string);
      $end = $charsEndIndex($strSymbols, $stringToArray(chars)) + 1;

  return $castSlice($strSymbols, 0, $end).join('');
}

return trimEnd;

