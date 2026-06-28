<?php
$baseUniq = require __DIR__ . '/_baseUniq.php';
function uniq($array) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseUniq($array) : []);
}
return 'uniq';
