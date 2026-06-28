<?php
$baseEach = require __DIR__ . '/_baseEach.php';
function baseFilter($collection, $predicate) {
    $result = [];
    $baseEach($collection, function($value, $index, $collection) {
        if ($predicate($value, $index, $collection)) {
            $result[] = $value;
        }
});
    return $result;
}
return 'baseFilter';
