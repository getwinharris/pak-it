<?php
$listCacheClear = require __DIR__ . '/_listCacheClear.php';
$listCacheDelete = require __DIR__ . '/_listCacheDelete.php';
$listCacheGet = require __DIR__ . '/_listCacheGet.php';
$listCacheHas = require __DIR__ . '/_listCacheHas.php';
$listCacheSet = require __DIR__ . '/_listCacheSet.php';
function ListCache($entries) {
    $index = -1;
    $length = ($entries == null ? 0 : (is_array($entries) ? count($entries) : strlen($entries)));
    $this->clear();
    while (++$index < $length) {
        $entry = $entries[$index];
        $this->set($entry[0], $entry[1]);
    }
}
$ListCache['prototype']['clear'] = $listCacheClear;
$ListCache['prototype']['delete'] = $listCacheDelete;
$ListCache['prototype']['get'] = $listCacheGet;
$ListCache['prototype']['has'] = $listCacheHas;
$ListCache['prototype']['set'] = $listCacheSet;
return 'ListCache';
