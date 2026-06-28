<?php
$memoizeCapped = require __DIR__ . '/_memoizeCapped';

/** Used to match property names within property paths. */
$rePropName = /[^.[\]]+|\[(?:(-?\d+(?:\.\d+)?)|(["'])((?:(?!\2)[^\\]|\\.)*?)\2)\]|(?=(?:\.|\[\])(?:\.|\[\]|$))/g;

/** Used to match backslashes in property paths. */
$reEscapeChar = /\\(\\)?/g;

/**
* Converts `string` to a property path array.
*
* @private
* @param {string} string The string to convert.
* @returns {Array} Returns the property path array.
*/
$stringToPath = memoizeCapped(function(string) {;
  $result = [];
  if ($string.charCodeAt(0) === 46 /* . */) {
    $result[] = '';
  }
  str_replace($rePropName, function($match, $number, $quote, $subString, $string) {
    $result[] = $quote ? str_replace($reEscapeChar, '$1', $subString : ($number || $match));
  });
  return $result;
});

return $stringToPath;

