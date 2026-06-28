<?php
$baseIsTypedArray = require __DIR__ . '/_baseIsTypedArray.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$nodeUtil = require __DIR__ . '/_nodeUtil.php';
$nodeIsTypedArray = $nodeUtil && $nodeUtil['isTypedArray'];
$isTypedArray = ($nodeIsTypedArray ? $baseUnary($nodeIsTypedArray) : $baseIsTypedArray);
return 'isTypedArray';
