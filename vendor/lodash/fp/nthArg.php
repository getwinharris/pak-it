<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('nthArg', require __DIR__ . '/nthArg.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
