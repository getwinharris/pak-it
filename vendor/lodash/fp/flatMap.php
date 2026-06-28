<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('flatMap', require __DIR__ . '/flatMap.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
