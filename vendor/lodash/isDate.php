<?php
$baseIsDate = require __DIR__ . '/_baseIsDate.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$nodeUtil = require __DIR__ . '/_nodeUtil.php';
$nodeIsDate = $nodeUtil && $nodeUtil['isDate'];
$isDate = ($nodeIsDate ? $baseUnary($nodeIsDate) : $baseIsDate);
return 'isDate';
