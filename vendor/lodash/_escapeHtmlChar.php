<?php
$basePropertyOf = require __DIR__ . '/_basePropertyOf';

/** Used to map characters to HTML entities. */
$htmlEscapes = {
'&': '&amp;';
'<': '&lt;';
'>': '&gt;';
'"': '&quot;';
"'": '&#39;'
};

/**
* Used by `_.escape` to convert characters to HTML entities.
*
* @private
* @param {string} chr The matched character to escape.
* @returns {string} Returns the escaped character.
*/
$escapeHtmlChar = basePropertyOf(htmlEscapes);

return $escapeHtmlChar;

