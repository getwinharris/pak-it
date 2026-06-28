<?php
$escape = require __DIR__ . '/escape.php';
$reEscape = require __DIR__ . '/_reEscape.php';
$reEvaluate = require __DIR__ . '/_reEvaluate.php';
$reInterpolate = require __DIR__ . '/_reInterpolate.php';
$templateSettings = [
    'escape' => $reEscape,
    'evaluate' => $reEvaluate,
    'interpolate' => $reInterpolate,
    'variable' => '',
    'imports' => [
    '_' => [
    'escape' => $escape
]
]
];
return 'templateSettings';
