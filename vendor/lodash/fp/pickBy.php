<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pickBy', require('../pickBy'));

$func.placeholder = require('./placeholder');
return $func;

