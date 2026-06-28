<?php
$baseIsMap = require __DIR__ . '/_baseIsMap.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$nodeUtil = require __DIR__ . '/_nodeUtil.php';
$nodeIsMap = $nodeUtil && $nodeUtil['isMap'];
$isMap = ($nodeIsMap ? $baseUnary($nodeIsMap) : $baseIsMap);
return 'isMap';
