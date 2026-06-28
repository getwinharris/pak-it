<?php
$basePropertyOf = require __DIR__ . '/_basePropertyOf.php';
$htmlUnescapes = [
    '&amp;' => '&',
    '&lt;' => '<',
    '&gt;' => '>',
    '&quot;' => '"',
    '&#39;' => "'"
];
$unescapeHtmlChar = $basePropertyOf($htmlUnescapes);
return 'unescapeHtmlChar';
