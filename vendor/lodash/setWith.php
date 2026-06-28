<?php
$baseSet = require __DIR__ . '/_baseSet.php';
function setWith($object, $path, $value, $customizer) {
    $customizer = (is_callable($customizer) ? $customizer : null);
    return ($object == null ? $object : $baseSet($object, $path, $value, $customizer));
}
return 'setWith';
