<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('mergeAll', require('../merge'));

$func.placeholder = require('./placeholder');
return $func;

