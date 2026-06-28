<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('intersectionWith', require __DIR__ . '/intersectionWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
