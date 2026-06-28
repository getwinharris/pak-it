<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('invertBy', require('../invertBy'));

$func.placeholder = require('./placeholder');
return $func;

