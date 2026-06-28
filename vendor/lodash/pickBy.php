<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$basePickBy = require __DIR__ . '/_basePickBy.php';
$getAllKeysIn = require __DIR__ . '/_getAllKeysIn.php';
function pickBy($object, $predicate) {
    if ($object == null) {
        return [];
    }
    $props = $arrayMap($getAllKeysIn($object), function($prop) {
        return [$prop];
});
    $predicate = $baseIteratee($predicate);
    return $basePickBy($object, $props, function($value, $path) {
        return $predicate($value, $path[0]);
});
}
return 'pickBy';
