<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('lastIndexOf', require __DIR__ . '/lastIndexOf.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
