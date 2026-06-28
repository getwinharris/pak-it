<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pickBy', require __DIR__ . '/pickBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
