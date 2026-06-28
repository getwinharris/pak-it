<?php
$baseSortedUniq = require __DIR__ . '/_baseSortedUniq.php';
function sortedUniq($array) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSortedUniq($array) : []);
}
return 'sortedUniq';
