<?php
$Symbol = require __DIR__ . '/_Symbol';
    $isArguments = require('./$isArguments');
    $isArray = require('./$isArray');

/** Built-in value references. */
$spreadableSymbol = Symbol ? Symbol.isConcatSpreadable : undefined;

/**
* Checks if `value` is a flattenable `arguments` object or array.
*
* @private
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is flattenable, else `false`.
*/
function isFlattenable($value) {
  return $isArray(value) || $isArguments(value) ||
    !!($spreadableSymbol && value && value[$spreadableSymbol]);
}

return isFlattenable;

