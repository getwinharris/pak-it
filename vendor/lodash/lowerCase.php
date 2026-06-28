<?php
$createCompounder = require __DIR__ . '/_createCompounder.php';
$lowerCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? ' ' : '') + strtolower($word);
});
return 'lowerCase';
