<?php
$root = require __DIR__ . '/_root.php';
$now = function() {
        return $root['Date']['now']();
};
return 'now';
