<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sumBy', require('../sumBy'));

$func.placeholder = require('./placeholder');
return $func;

