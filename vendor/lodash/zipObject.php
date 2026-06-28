<?php
$assignValue = require __DIR__ . '/_assignValue.php';
$baseZipObject = require __DIR__ . '/_baseZipObject.php';
function zipObject($props, $values) {
    return $baseZipObject($props || [], $values || [], $assignValue);
}
return 'zipObject';
