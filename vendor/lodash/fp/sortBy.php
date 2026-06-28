<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortBy', require __DIR__ . '/sortBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
