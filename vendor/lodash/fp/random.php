<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('random', require __DIR__ . '/random.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
