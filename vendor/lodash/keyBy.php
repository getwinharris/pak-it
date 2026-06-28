<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$createAggregator = require __DIR__ . '/_createAggregator.php';
$keyBy = $createAggregator(function($result, $value, $key) {
        $baseAssignValue($result, $key, $value);
});
return 'keyBy';
