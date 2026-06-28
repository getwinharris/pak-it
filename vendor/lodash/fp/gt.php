<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('gt', require('../gt'));

$func.placeholder = require('./placeholder');
return $func;

