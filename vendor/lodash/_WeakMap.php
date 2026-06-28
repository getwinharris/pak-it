<?php
$getNative = require __DIR__ . '/_getNative.php';
$root = require __DIR__ . '/_root.php';
$WeakMap = $getNative($root, 'WeakMap');
return '_WeakMap';
