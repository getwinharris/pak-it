<?php
$reWrapComment = '/\\{(?:\\n\\\\/#\\* \\[wrapped with .+\\] \\*\\\\/#)?\\n?/';
function insertWrapDetails($source, $details) {
    $length = (is_array($details) ? count($details) : strlen($details));
    if (!$length) {
        return $source;
    }
    $lastIndex = $length - 1;
    $details[$lastIndex] = ($length > 1 ? '& ' : '') + $details[$lastIndex];
    $details = implode(($length > 2 ? ', ' : ' '), $details);
    return str_replace($reWrapComment, '{\n/* [wrapped with ' + $details + '] */\n', $source);
}
return 'insertWrapDetails';
