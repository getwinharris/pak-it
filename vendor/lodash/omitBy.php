<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$negate = require __DIR__ . '/negate.php';
$pickBy = require __DIR__ . '/pickBy.php';
function omitBy($object, $predicate) {
    return $pickBy($object, $negate($baseIteratee($predicate)));
}
return 'omitBy';
