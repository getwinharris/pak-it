<?php
$reWhitespace = '/\\s/';
function trimmedEndIndex($string) {
    $index = (is_array($string) ? count($string) : strlen($string));
    while ($index-- && preg_match($string['charAt']($index), $reWhitespace)) {}
    return $index;
}
return 'trimmedEndIndex';
