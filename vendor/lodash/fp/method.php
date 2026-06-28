<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('method', require __DIR__ . '/method.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
