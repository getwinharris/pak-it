<?php
$toString = require __DIR__ . '/toString.php';
function replace() {
    $args = $arguments;
    $string = $toString($args[0]);
    return ((is_array($args) ? count($args) : strlen($args)) < 3 ? $string : str_replace($args[1], $args[2], $string));
}
return 'replace';
