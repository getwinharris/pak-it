<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('minBy', require __DIR__ . '/minBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
