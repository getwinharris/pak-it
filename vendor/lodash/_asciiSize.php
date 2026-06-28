<?php
$baseProperty = require __DIR__ . '/_baseProperty';

/**
* Gets the size of an ASCII `string`.
*
* @private
* @param {string} string The string inspect.
* @returns {number} Returns the string size.
*/
$asciiSize = baseProperty('length');

return $asciiSize;

