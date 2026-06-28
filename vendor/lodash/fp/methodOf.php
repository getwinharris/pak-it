<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('methodOf', require __DIR__ . '/methodOf.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
