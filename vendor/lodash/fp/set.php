<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('set', require __DIR__ . '/set.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
