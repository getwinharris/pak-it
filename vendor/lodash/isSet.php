<?php
$baseIsSet = require __DIR__ . '/_baseIsSet.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$nodeUtil = require __DIR__ . '/_nodeUtil.php';
$nodeIsSet = $nodeUtil && $nodeUtil['isSet'];
$isSet = ($nodeIsSet ? $baseUnary($nodeIsSet) : $baseIsSet);
return 'isSet';
