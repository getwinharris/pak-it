<?php
/**
* Converts an ASCII `string` to an array.
*
* @private
* @param {string} string The string to convert.
* @returns {Array} Returns the converted array.
*/
function asciiToArray($string) {
  return explode('', $string);
}

return asciiToArray;

