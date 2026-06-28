<?php
$identity = require __DIR__ . '/identity.php';
$metaMap = require __DIR__ . '/_metaMap.php';
$baseSetData = (!$metaMap ? $identity : function($func, $data) {
        $metaMap['set']($func, $data);
        return $func;
});
return 'baseSetData';
