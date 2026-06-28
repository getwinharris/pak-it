<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('noop', require __DIR__ . '/noop.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
