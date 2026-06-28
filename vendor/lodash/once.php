<?php
$before = require __DIR__ . '/before.php';
function once($func) {
    return $before(2, $func);
}
return 'once';
