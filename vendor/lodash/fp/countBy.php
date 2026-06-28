<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('countBy', require('../countBy'));

$func.placeholder = require('./placeholder');
return $func;

