<?php
$mapCacheClear = require __DIR__ . '/_mapCacheClear.php';
$mapCacheDelete = require __DIR__ . '/_mapCacheDelete.php';
$mapCacheGet = require __DIR__ . '/_mapCacheGet.php';
$mapCacheHas = require __DIR__ . '/_mapCacheHas.php';
$mapCacheSet = require __DIR__ . '/_mapCacheSet.php';
function MapCache($entries) {
    $index = -1;
    $length = ($entries == null ? 0 : (is_array($entries) ? count($entries) : strlen($entries)));
    $this->clear();
    while (++$index < $length) {
        $entry = $entries[$index];
        $this->set($entry[0], $entry[1]);
    }
}
$MapCache['prototype']['clear'] = $mapCacheClear;
$MapCache['prototype']['delete'] = $mapCacheDelete;
$MapCache['prototype']['get'] = $mapCacheGet;
$MapCache['prototype']['has'] = $mapCacheHas;
$MapCache['prototype']['set'] = $mapCacheSet;
return 'MapCache';
