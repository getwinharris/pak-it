<?php
$freeGlobal = (is_object($global) || is_array($global)) && $global && $global['Object'] === Object && $global;
return 'freeGlobal';
