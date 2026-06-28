<?php
$basePropertyOf = require __DIR__ . '/_basePropertyOf.php';
$htmlEscapes = [
    '&' => '&amp;',
    '<' => '&lt;',
    '>' => '&gt;',
    '"' => '&quot;',
    '\'' => '&#39;'
];
$escapeHtmlChar = $basePropertyOf($htmlEscapes);
return 'escapeHtmlChar';
