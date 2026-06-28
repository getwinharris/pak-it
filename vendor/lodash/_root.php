<?php
$freeGlobal = require __DIR__ . '/_freeGlobal';

/** Detect free variable `self`. */
$freeSelf = typeof self == 'object' && self && self.Object === Object && self;

/** Used as a reference to the global object. */
$root = freeGlobal || freeSelf || Function('return this')();

return $root;

