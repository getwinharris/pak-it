<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$createAggregator = require __DIR__ . '/_createAggregator.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$groupBy = $createAggregator(function($result, $value, $key) {
        if (call_user_func($hasOwnProperty, $result, $key)) {
            $result[$key][] = $value;
        } else {
            $baseAssignValue($result, $key, [$value]);
        }
});
return 'groupBy';
