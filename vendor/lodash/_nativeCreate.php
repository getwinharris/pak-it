<?php
$getNative = require __DIR__ . '/_getNative';

/* Built-in method references that are verified to be native. */
$nativeCreate = getNative(Object, 'create');

module.exports = nativeCreate;

