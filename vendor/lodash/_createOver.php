<?php
$apply = require __DIR__ . '/_apply.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$flatRest = require __DIR__ . '/_flatRest.php';
function createOver($arrayFunc) {
    return $flatRest(function($iteratees) {
        $iteratees = $arrayMap($iteratees, $baseUnary($baseIteratee));
        return $baseRest(function($args) {
        $thisArg = $this;
        return $arrayFunc($iteratees, function($iteratee) {
        return $apply($iteratee, $thisArg, $args);
});
});
});
}
return 'createOver';
