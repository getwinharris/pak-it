<?php
$copyArray = require __DIR__ . '/_copyArray.php';
$shuffleSelf = require __DIR__ . '/_shuffleSelf.php';
function arrayShuffle($array) {
    return $shuffleSelf($copyArray($array));
}
return 'arrayShuffle';
