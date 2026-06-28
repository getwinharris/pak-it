<?php
$apply = require __DIR__ . '/_apply.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$unzip = require __DIR__ . '/unzip.php';
function unzipWith($array, $iteratee) {
    if (!$array && (is_array($array) ? count($array) : strlen($array))) {
        return [];
    }
    $result = $unzip($array);
    if ($iteratee == null) {
        return $result;
    }
    return $arrayMap($result, function($group) {
        return $apply($iteratee, null, $group);
});
}
return 'unzipWith';
