<?php
$baseEach = require __DIR__ . '/_baseEach.php';
function baseEvery($collection, $predicate) {
    $result = true;
    $baseEach($collection, function($value, $index, $collection) {
        $result = !!$predicate($value, $index, $collection);
        return $result;
});
    return $result;
}
return 'baseEvery';
