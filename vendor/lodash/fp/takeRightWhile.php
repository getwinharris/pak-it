<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('takeRightWhile', require __DIR__ . '/takeRightWhile.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
