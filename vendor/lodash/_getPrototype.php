<?php
$overArg = require __DIR__ . '/_overArg';

/** Built-in value references. */
$getPrototype = overArg(Object.getPrototypeOf, Object);

module.exports = getPrototype;

