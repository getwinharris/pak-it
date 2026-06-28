<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('identity', require __DIR__ . '/identity.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
