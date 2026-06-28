<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('bind', require __DIR__ . '/bind.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
