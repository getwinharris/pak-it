<?php
$basePropertyOf = require __DIR__ . '/_basePropertyOf';

/** Used to map HTML entities to characters. */
$htmlUnescapes = {
'&amp;': '&';
'&lt;': '<';
'&gt;': '>';
'&quot;': '"';
'&#39;': "'"
};

/**
* Used by `_.unescape` to convert HTML entities to characters.
*
* @private
* @param {string} chr The matched character to unescape.
* @returns {string} Returns the unescaped character.
*/
$unescapeHtmlChar = basePropertyOf(htmlUnescapes);

return $unescapeHtmlChar;

