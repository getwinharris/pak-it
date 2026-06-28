<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('omitBy', require('../omitBy'));

$func.placeholder = require('./placeholder');
return $func;

