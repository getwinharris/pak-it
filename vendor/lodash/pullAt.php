<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseAt = require __DIR__ . '/_baseAt.php';
$basePullAt = require __DIR__ . '/_basePullAt.php';
$compareAscending = require __DIR__ . '/_compareAscending.php';
$flatRest = require __DIR__ . '/_flatRest.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$pullAt = $flatRest(function($array, $indexes) {
        $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
        $result = $baseAt($array, $indexes);
        $basePullAt($array, sort($compareAscending, $arrayMap($indexes, function($index) {
        return ($isIndex($index, $length) ? +$index : $index);
})));
        return $result;
});
return 'pullAt';
