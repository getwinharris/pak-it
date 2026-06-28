<?php
$asciiSize = require __DIR__ . '/_asciiSize';
    $hasUnicode = require('./_hasUnicode');
    $unicodeSize = require('./_unicodeSize');

/**
* Gets the number of symbols in `string`.
*
* @private
* @param {string} string The string to inspect.
* @returns {number} Returns the string size.
*/
function stringSize($string) {
  return $hasUnicode(string)
    ? $unicodeSize(string)
    : $asciiSize(string);
}

return stringSize;

