<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assignAllWith', require('../assignWith'));

$func.placeholder = require('./placeholder');
return $func;

