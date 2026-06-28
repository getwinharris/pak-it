<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('split', require __DIR__ . '/split.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
