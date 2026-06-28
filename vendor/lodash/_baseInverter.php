<?php
$baseForOwn = require __DIR__ . '/_baseForOwn.php';
function baseInverter($object, $setter, $iteratee, $accumulator) {
    $baseForOwn($object, function($value, $key, $object) {
        $setter($accumulator, $iteratee($value), $key, $object);
});
    return $accumulator;
}
return 'baseInverter';
