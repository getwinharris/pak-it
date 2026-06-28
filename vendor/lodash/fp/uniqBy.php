<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('uniqBy', require('../uniqBy'));

$func.placeholder = require('./placeholder');
return $func;

