<?php
$baseEach = require __DIR__ . '/_baseEach.php';
function baseSome($collection, $predicate) {
    $result = null;
    $baseEach($collection, function($value, $index, $collection) {
        $result = $predicate($value, $index, $collection);
        return !$result;
});
    return !!$result;
}
return 'baseSome';
