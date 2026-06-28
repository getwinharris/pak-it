<?php
$coreJsData = require __DIR__ . '/_coreJsData';
    $isFunction = require('./$isFunction');
    $stubFalse = require('./$stubFalse');

/**
* Checks if `func` is capable of being masked.
*
* @private
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `func` is maskable, else `false`.
*/
$isMaskable = coreJsData ? isFunction : stubFalse;

return $isMaskable;

