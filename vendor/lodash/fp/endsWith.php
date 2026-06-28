<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('endsWith', require __DIR__ . '/endsWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
