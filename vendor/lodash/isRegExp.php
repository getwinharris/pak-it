<?php
$baseIsRegExp = require __DIR__ . '/_baseIsRegExp.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$nodeUtil = require __DIR__ . '/_nodeUtil.php';
$nodeIsRegExp = $nodeUtil && $nodeUtil['isRegExp'];
$isRegExp = ($nodeIsRegExp ? $baseUnary($nodeIsRegExp) : $baseIsRegExp);
return 'isRegExp';
