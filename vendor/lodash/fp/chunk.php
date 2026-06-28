<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('chunk', require __DIR__ . '/chunk.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
