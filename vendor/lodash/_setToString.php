<?php
$baseSetToString = require __DIR__ . '/_baseSetToString';
    $shortOut = require('./_shortOut');

/**
* Sets the `toString` method of `func` to return `string`.
*
* @private
* @param {Function} func The function to modify.
* @param {Function} string The `toString` result.
* @returns {Function} Returns `func`.
*/
$setToString = shortOut(baseSetToString);

return $setToString;

