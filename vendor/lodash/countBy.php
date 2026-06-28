<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$createAggregator = require __DIR__ . '/_createAggregator.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$countBy = $createAggregator(function($result, $value, $key) {
        if (call_user_func($hasOwnProperty, $result, $key)) {
            ++$result[$key];
        } else {
            $baseAssignValue($result, $key, 1);
        }
});
return 'countBy';
