<?php
$isObject = require __DIR__ . '/isObject.php';
$objectCreate = Object['create'];
$baseCreate = (function() {
        function object() {}
        return function($proto) {
        if (!$isObject($proto)) {
            return [];
        }
        if ($objectCreate) {
            return $objectCreate($proto);
        }
        $object['prototype'] = $proto;
        $result = new $object();
        $object['prototype'] = null;
        return $result;
};
})();
return 'baseCreate';
