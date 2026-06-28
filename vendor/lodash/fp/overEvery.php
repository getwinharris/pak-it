<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('overEvery', require __DIR__ . '/overEvery.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
