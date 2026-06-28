<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('iteratee', require __DIR__ . '/iteratee.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
