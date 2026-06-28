<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortedIndexBy', require __DIR__ . '/sortedIndexBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
