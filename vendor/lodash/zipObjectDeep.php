<?php
$baseSet = require __DIR__ . '/_baseSet.php';
$baseZipObject = require __DIR__ . '/_baseZipObject.php';
function zipObjectDeep($props, $values) {
    return $baseZipObject($props || [], $values || [], $baseSet);
}
return 'zipObjectDeep';
