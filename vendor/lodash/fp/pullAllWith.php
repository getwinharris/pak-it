<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pullAllWith', require __DIR__ . '/pullAllWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
