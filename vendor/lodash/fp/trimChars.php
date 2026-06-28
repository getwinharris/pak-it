<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('trimChars', require __DIR__ . '/trim.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
