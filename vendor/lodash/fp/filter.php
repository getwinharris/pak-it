<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('filter', require __DIR__ . '/filter.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
