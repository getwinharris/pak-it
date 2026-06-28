<?php
$baseIsArrayBuffer = require __DIR__ . '/_baseIsArrayBuffer.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$nodeUtil = require __DIR__ . '/_nodeUtil.php';
$nodeIsArrayBuffer = $nodeUtil && $nodeUtil['isArrayBuffer'];
$isArrayBuffer = ($nodeIsArrayBuffer ? $baseUnary($nodeIsArrayBuffer) : $baseIsArrayBuffer);
return 'isArrayBuffer';
