<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$unzip = require __DIR__ . '/unzip.php';
$zip = $baseRest($unzip);
return 'zip';
