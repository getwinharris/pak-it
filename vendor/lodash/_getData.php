<?php
$metaMap = require __DIR__ . '/_metaMap.php';
$noop = require __DIR__ . '/noop.php';
$getData = (!$metaMap ? $noop : function($func) {
        return $metaMap['get']($func);
});
return 'getData';
