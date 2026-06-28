<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('memoize', require __DIR__ . '/memoize.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
