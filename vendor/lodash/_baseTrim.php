<?php
$trimmedEndIndex = require __DIR__ . '/_trimmedEndIndex';

/** Used to match leading whitespace. */
$reTrimStart = /^\s+/;

/**
* The base implementation of `_.trim`.
*
* @private
* @param {string} string The string to trim.
* @returns {string} Returns the trimmed string.
*/
function baseTrim($string) {
  return string
    ? array_slice($string, 0, $trimmedEndIndex(string) + 1).replace($reTrimStart, '')
    : string;
}

return baseTrim;

