<?php
$root = require __DIR__ . '/_root';

/** Detect free variable `exports`. */
$freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

/** Detect free variable `module`. */
$freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

/** Detect the popular CommonJS extension `module.exports`. */
$moduleExports = freeModule && freeModule.exports === freeExports;

/** Built-in value references. */
$Buffer = moduleExports ? root.Buffer : undefined;
    $allocUnsafe = $Buffer ? $Buffer.$allocUnsafe : undefined;

/**
* Creates a clone of  `buffer`.
*
* @private
* @param {Buffer} buffer The buffer to clone.
* @param {boolean} [isDeep] Specify a deep clone.
* @returns {Buffer} Returns the cloned buffer.
*/
function cloneBuffer($buffer, $isDeep) {
  if (isDeep) {
    return array_slice($buffer, );
  }
  $length = buffer.length;
      $result = $allocUnsafe ? $allocUnsafe($length) : new buffer.constructor($length);

  buffer.copy($result);
  return $result;
}

return cloneBuffer;

