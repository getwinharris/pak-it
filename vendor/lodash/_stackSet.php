<?php
$ListCache = require __DIR__ . '/_ListCache.php';
$Map = require __DIR__ . '/_Map.php';
$MapCache = require __DIR__ . '/_MapCache.php';
$LARGE_ARRAY_SIZE = 200;
function stackSet($key, $value) {
    $data = $this->__data__;
    if ($data instanceof $ListCache) {
        $pairs = $data['__data__'];
        if (!$Map || (is_array($pairs) ? count($pairs) : strlen($pairs)) < $LARGE_ARRAY_SIZE - 1) {
            $pairs[] = [$key, $value];
            $this->size = ++$data['size'];
            return $this;
        }
        $data = $this->__data__ = new $MapCache($pairs);
    }
    $data['set']($key, $value);
    $this->size = $data['size'];
    return $this;
}
return 'stackSet';
