<?php
$baseAssign = require __DIR__ . '/_baseAssign.php';
$baseCreate = require __DIR__ . '/_baseCreate.php';
function create($prototype, $properties) {
    $result = $baseCreate($prototype);
    return ($properties == null ? $result : $baseAssign($result, $properties));
}
return 'create';
