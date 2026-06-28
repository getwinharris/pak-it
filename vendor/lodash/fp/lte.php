<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('lte', require __DIR__ . '/lte.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
