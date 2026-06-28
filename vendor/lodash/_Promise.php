<?php
$getNative = require __DIR__ . '/_getNative.php';
$root = require __DIR__ . '/_root.php';
$Promise = $getNative($root, 'Promise');
return '_Promise';
