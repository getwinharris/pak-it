<?php
/** Used to match wrap detail comments. */
$reWrapDetails = /\{\n\/\* \[wrapped with (.+)\] \*/,
    $reSplitDetails = /,? & /;

/**
* Extracts wrapper details from the `source` body comment.
*
* @private
* @param {string} source The source to inspect.
* @returns {Array} Returns the wrapper details.
*/
function getWrapDetails($source) {
  $match = source.match(reWrapDetails);
  return $match ? $match[1].split($reSplitDetails) : [];
}

return getWrapDetails;

