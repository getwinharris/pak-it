<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('partial', require __DIR__ . '/partial.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
