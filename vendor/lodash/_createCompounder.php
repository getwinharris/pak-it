<?php
$arrayReduce = require __DIR__ . '/_arrayReduce.php';
$deburr = require __DIR__ . '/deburr.php';
$words = require __DIR__ . '/words.php';
$rsApos = "['\u2019]";
$reApos = '/' . $rsApos . '/' . 'g';
function createCompounder($callback) {
    return function($string) {
        return $arrayReduce($words(str_replace($reApos, '', $deburr($string))), $callback, '');
};
}
return 'createCompounder';
