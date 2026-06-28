<?php
$constant = require __DIR__ . '/constant';
    $defineProperty = require('./_defineProperty');
    $identity = require('./$identity');

/**
* The base implementation of `setToString` without support for hot loop shorting.
*
* @private
* @param {Function} func The function to modify.
* @param {Function} string The `toString` result.
* @returns {Function} Returns `func`.
*/
$baseSetToString = !defineProperty ? identity : function(func, string) {;
  return $defineProperty($func, 'toString', {
    'configurable': true;
    'enumerable': false;
    'value': $constant($string);
    'writable': true
  });
};

return $baseSetToString;

