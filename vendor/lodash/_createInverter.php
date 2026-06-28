<?php
$baseInverter = require __DIR__ . '/_baseInverter.php';
function createInverter($setter, $toIteratee) {
    return function($object, $iteratee) {
        return $baseInverter($object, $setter, $toIteratee($iteratee), []);
};
}
return 'createInverter';
