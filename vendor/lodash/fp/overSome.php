<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('overSome', require __DIR__ . '/overSome.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
