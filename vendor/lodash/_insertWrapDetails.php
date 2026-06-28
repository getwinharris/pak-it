<?php
/** Used to match wrap detail comments. */
$reWrapComment = /\{(?:\n\/\* \[wrapped with .+\] \*\/)?\n?/;

/**
* Inserts wrapper `details` in a comment at the top of the `source` body.
*
* @private
* @param {string} source The source to modify.
* @returns {Array} details The details to insert.
* @returns {string} Returns the modified source.
*/
function insertWrapDetails($source, $details) {
  $length = details.length;
  if (!$length) {
    return source;
  }
  $lastIndex = length - 1;
  details[$lastIndex] = ($length > 1 ? '& ' : '') + details[$lastIndex];
  details = implode($length > 2 ? ', ' : ' ', $details);
  return str_replace($reWrapComment, '{\n/* [wrapped with ' + details + '] */\n', $source);
}

return insertWrapDetails;

