<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedUniqBy', require('../sortedUniqBy'));

$func.placeholder = require('./placeholder');
return $func;

