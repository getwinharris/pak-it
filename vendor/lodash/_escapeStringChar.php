<?php
$stringEscapes = [
    '\\' => '\\',
    '\'' => "'",
    '
' => 'n',
    '' => 'r',
    ' ' => 'u2028',
    ' ' => 'u2029'
];
function escapeStringChar($chr) {
    return '\\' + $stringEscapes[$chr];
}
return 'escapeStringChar';
