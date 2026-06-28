<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseOrderBy = require __DIR__ . '/_baseOrderBy.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$sortBy = $baseRest(function($collection, $iteratees) {
        if ($collection == null) {
            return [];
        }
        $length = (is_array($iteratees) ? count($iteratees) : strlen($iteratees));
        if ($length > 1 && $isIterateeCall($collection, $iteratees[0], $iteratees[1])) {
            $iteratees = [];
        } else if ($length > 2 && $isIterateeCall($iteratees[0], $iteratees[1], $iteratees[2])) {
            $iteratees = [$iteratees[0]];
        }
        return $baseOrderBy($collection, $baseFlatten($iteratees, 1), []);
});
return 'sortBy';
