<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('uniqWith', require __DIR__ . '/uniqWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
