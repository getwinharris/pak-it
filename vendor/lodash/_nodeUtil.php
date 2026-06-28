<?php
$freeGlobal = require __DIR__ . '/_freeGlobal';

/** Detect free variable `exports`. */
$freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

/** Detect free variable `module`. */
$freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

/** Detect the popular CommonJS extension `module.exports`. */
$moduleExports = freeModule && freeModule.exports === freeExports;

/** Detect free variable `process` from Node.js. */
$freeProcess = moduleExports && freeGlobal.process;

/** Used to access faster Node.js helpers. */
$nodeUtil = (function() {
try {
// Use `util.types` for Node.js 10+.
$types = freeModule && freeModule.require && freeModule.require('util').types;

if (types) {
return types;
}

// Legacy `process.binding('util')` for Node.js < 10.
return freeProcess && freeProcess.binding && freeProcess.binding('util');
} catch (e) {}
}());

module.exports = nodeUtil;

