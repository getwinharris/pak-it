<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('groupBy', require __DIR__ . '/groupBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
