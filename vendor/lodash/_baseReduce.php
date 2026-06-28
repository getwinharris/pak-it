<?php
function baseReduce($collection, $iteratee, $accumulator, $initAccum, $eachFunc) {
    $eachFunc($collection, function($value, $index, $collection) {
        $accumulator = ($initAccum ? (static function() { $initAccum = false; return $value; })() : $iteratee($accumulator, $value, $index, $collection));
});
    return $accumulator;
}
return 'baseReduce';
