<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('overEvery', require('../overEvery'));

$func.placeholder = require('./placeholder');
return $func;

