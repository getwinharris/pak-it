<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pullAllBy', require('../pullAllBy'));

$func.placeholder = require('./placeholder');
return $func;

