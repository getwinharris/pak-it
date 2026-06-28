<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('omitBy', require __DIR__ . '/omitBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
