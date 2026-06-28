<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortedIndexOf', require __DIR__ . '/sortedIndexOf.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
