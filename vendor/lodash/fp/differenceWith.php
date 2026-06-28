<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('differenceWith', require __DIR__ . '/differenceWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
