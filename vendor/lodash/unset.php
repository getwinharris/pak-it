<?php
$baseUnset = require __DIR__ . '/_baseUnset.php';
function _unset($object, $path) {
    return ($object == null ? true : $baseUnset($object, $path));
}
return '_unset';
