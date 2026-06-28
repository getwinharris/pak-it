<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('maxBy', require __DIR__ . '/maxBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
