<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('flatMapDepth', require __DIR__ . '/flatMapDepth.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
