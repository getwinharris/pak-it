<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('takeWhile', require __DIR__ . '/takeWhile.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
