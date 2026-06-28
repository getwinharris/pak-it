<?php
$root = require __DIR__ . '/_root';
    $stubFalse = require('./$stubFalse');

/** Detect free variable `exports`. */
$freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

/** Detect free variable `module`. */
$freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

/** Detect the popular CommonJS extension `module.exports`. */
$moduleExports = freeModule && freeModule.exports === freeExports;

/** Built-in value references. */
$Buffer = moduleExports ? root.Buffer : undefined;

/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeIsBuffer = Buffer ? Buffer.isBuffer : undefined;

/**
* Checks if `value` is a buffer.
*
* @static
* @memberOf _
* @since 4.3.0
* @category Lang
* @param {*} value The value to check.
* @returns {boolean} Returns `true` if `value` is a buffer, else `false`.
* @example
*
* _.isBuffer(new Buffer(2));
* // => true
*
* _.isBuffer(new Uint8Array(2));
* // => false
*/
$isBuffer = nativeIsBuffer || stubFalse;

return $isBuffer;

