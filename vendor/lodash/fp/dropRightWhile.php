<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('dropRightWhile', require __DIR__ . '/dropRightWhile.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
