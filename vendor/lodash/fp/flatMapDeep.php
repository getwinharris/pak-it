<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('flatMapDeep', require __DIR__ . '/flatMapDeep.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
