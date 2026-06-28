<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('mergeAllWith', require __DIR__ . '/mergeWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
