<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$unzipWith = require __DIR__ . '/unzipWith.php';
$zipWith = $baseRest(function($arrays) {
        $length = (is_array($arrays) ? count($arrays) : strlen($arrays));
        $iteratee = ($length > 1 ? $arrays[$length - 1] : null);
        $iteratee = (is_callable($iteratee) ? (static function() { array_pop($arrays); return $iteratee; })() : null);
        return $unzipWith($arrays, $iteratee);
});
return 'zipWith';
