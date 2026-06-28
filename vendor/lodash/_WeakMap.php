<?php
$getNative = require __DIR__ . '/_getNative';
    $root = require('./_root');

/* Built-in method references that are verified to be native. */
$WeakMap = getNative(root, 'WeakMap');

module.exports = WeakMap;

