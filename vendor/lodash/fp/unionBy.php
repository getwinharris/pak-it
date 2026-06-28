<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('unionBy', require __DIR__ . '/unionBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
