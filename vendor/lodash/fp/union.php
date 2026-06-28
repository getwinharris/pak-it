<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('union', require __DIR__ . '/union.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
