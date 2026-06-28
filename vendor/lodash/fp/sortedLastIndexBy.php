<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortedLastIndexBy', require __DIR__ . '/sortedLastIndexBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
