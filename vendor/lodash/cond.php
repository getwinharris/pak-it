<?php
$apply = require __DIR__ . '/_apply.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$FUNC_ERROR_TEXT = 'Expected a function';
function cond($pairs) {
    $length = ($pairs == null ? 0 : (is_array($pairs) ? count($pairs) : strlen($pairs)));
    $toIteratee = $baseIteratee;
    $pairs = (!$length ? [] : $arrayMap($pairs, function($pair) {
        if (!is_callable($pair[1])) {
            throw new TypeError($FUNC_ERROR_TEXT);
        }
        return [$toIteratee($pair[0]), $pair[1]];
}));
    return $baseRest(function($args) {
        $index = -1;
        while (++$index < $length) {
            $pair = $pairs[$index];
            if ($apply($pair[0], $this, $args)) {
                return $apply($pair[1], $this, $args);
            }
        }
});
}
return 'cond';
