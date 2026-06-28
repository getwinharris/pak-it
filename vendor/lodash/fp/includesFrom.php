<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('includesFrom', require __DIR__ . '/includes.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
