<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortedLastIndexOf', require __DIR__ . '/sortedLastIndexOf.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
