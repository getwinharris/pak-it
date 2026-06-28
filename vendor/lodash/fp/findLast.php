<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('findLast', require __DIR__ . '/findLast.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
