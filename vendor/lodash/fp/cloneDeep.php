<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('cloneDeep', require __DIR__ . '/cloneDeep.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
