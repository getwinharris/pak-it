<?php
$ary = require __DIR__ . '/ary.php';
function unary($func) {
    return $ary($func, 1);
}
return 'unary';
