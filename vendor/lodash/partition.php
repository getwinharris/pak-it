<?php
$createAggregator = require __DIR__ . '/_createAggregator.php';
$partition = $createAggregator(function($result, $value, $key) {
        $result[($key ? 0 : 1)][] = $value;
}, function() {
        return [[], []];
});
return 'partition';
