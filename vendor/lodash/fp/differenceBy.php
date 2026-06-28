<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('differenceBy', require __DIR__ . '/differenceBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
