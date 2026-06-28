<?php
$capitalize = require __DIR__ . '/capitalize.php';
$createCompounder = require __DIR__ . '/_createCompounder.php';
$camelCase = $createCompounder(function($result, $word, $index) {
        $word = strtolower($word);
        return $result + ($index ? $capitalize($word) : $word);
});
return 'camelCase';
