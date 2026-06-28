<?php
$baseForOwn = require __DIR__ . '/_baseForOwn.php';
$createBaseEach = require __DIR__ . '/_createBaseEach.php';
$baseEach = $createBaseEach($baseForOwn);
return 'baseEach';
