<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortedIndex', require __DIR__ . '/sortedIndex.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
