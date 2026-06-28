<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('invoke', require __DIR__ . '/invoke.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
