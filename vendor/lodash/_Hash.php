<?php
$hashClear = require __DIR__ . '/_hashClear.php';
$hashDelete = require __DIR__ . '/_hashDelete.php';
$hashGet = require __DIR__ . '/_hashGet.php';
$hashHas = require __DIR__ . '/_hashHas.php';
$hashSet = require __DIR__ . '/_hashSet.php';
function _Hash($entries) {
    $index = -1;
    $length = ($entries == null ? 0 : (is_array($entries) ? count($entries) : strlen($entries)));
    $this->clear();
    while (++$index < $length) {
        $entry = $entries[$index];
        $this->set($entry[0], $entry[1]);
    }
}
$Hash['prototype']['clear'] = $hashClear;
$Hash['prototype']['delete'] = $hashDelete;
$Hash['prototype']['get'] = $hashGet;
$Hash['prototype']['has'] = $hashHas;
$Hash['prototype']['set'] = $hashSet;
return '_Hash';
