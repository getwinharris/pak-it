<?php
$reHasUnicodeWord = '/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/';
function hasUnicodeWord($string) {
    return preg_match($string, $reHasUnicodeWord);
}
return 'hasUnicodeWord';
