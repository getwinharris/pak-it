<?php
$baseForOwnRight = require __DIR__ . '/_baseForOwnRight.php';
$createBaseEach = require __DIR__ . '/_createBaseEach.php';
$baseEachRight = $createBaseEach($baseForOwnRight, true);
return 'baseEachRight';
