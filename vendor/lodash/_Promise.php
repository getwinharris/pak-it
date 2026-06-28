<?php
$getNative = require __DIR__ . '/_getNative';
    $root = require('./_root');

/* Built-in method references that are verified to be native. */
$Promise = getNative(root, 'Promise');

module.exports = Promise;

