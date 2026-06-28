<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pullAllBy', require __DIR__ . '/pullAllBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
