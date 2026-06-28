<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('meanBy', require('../meanBy'));

$func.placeholder = require('./placeholder');
return $func;

