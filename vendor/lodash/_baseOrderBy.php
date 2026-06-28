<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseGet = require __DIR__ . '/_baseGet.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseMap = require __DIR__ . '/_baseMap.php';
$baseSortBy = require __DIR__ . '/_baseSortBy.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$compareMultiple = require __DIR__ . '/_compareMultiple.php';
$identity = require __DIR__ . '/identity.php';
$isArray = require __DIR__ . '/isArray.php';
function baseOrderBy($collection, $iteratees, $orders) {
    if ((is_array($iteratees) ? count($iteratees) : strlen($iteratees))) {
        $iteratees = $arrayMap($iteratees, function($iteratee) {
        if ($isArray($iteratee)) {
            return function($value) {
        return $baseGet($value, ((is_array($iteratee) ? count($iteratee) : strlen($iteratee)) === 1 ? $iteratee[0] : $iteratee));
};
        }
        return $iteratee;
});
    } else {
        $iteratees = [$identity];
    }
    $index = -1;
    $iteratees = $arrayMap($iteratees, $baseUnary($baseIteratee));
    $result = $baseMap($collection, function($value, $key, $collection) {
        $criteria = $arrayMap($iteratees, function($iteratee) {
        return $iteratee($value);
});
        return [
            'criteria' => $criteria,
            'index' => ++$index,
            'value' => $value
        ];
});
    return $baseSortBy($result, function($object, $other) {
        return $compareMultiple($object, $other, $orders);
});
}
return 'baseOrderBy';
