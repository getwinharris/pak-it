<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('xorBy', require __DIR__ . '/xorBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
