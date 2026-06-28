<?php
$toString = require __DIR__ . '/toString.php';
$upperFirst = require __DIR__ . '/upperFirst.php';
function capitalize($string) {
    return $upperFirst(strtolower($toString($string)));
}
return 'capitalize';
