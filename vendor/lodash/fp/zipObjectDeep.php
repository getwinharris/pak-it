<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('zipObjectDeep', require('../zipObjectDeep'));

$func.placeholder = require('./placeholder');
return $func;

