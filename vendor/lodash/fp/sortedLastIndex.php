<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortedLastIndex', require __DIR__ . '/sortedLastIndex.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
