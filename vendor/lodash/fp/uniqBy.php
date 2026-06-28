<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('uniqBy', require __DIR__ . '/uniqBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
