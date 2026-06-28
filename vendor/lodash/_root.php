<?php
$freeGlobal = require __DIR__ . '/_freeGlobal.php';
$freeSelf = (is_object($self) || is_array($self)) && $self && $self['Object'] === Object && $self;
$root = $freeGlobal || $freeSelf || (static function() { return null; })();
return 'root';
