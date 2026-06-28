<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('dropWhile', require __DIR__ . '/dropWhile.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
