<?php
$createCompounder = require __DIR__ . '/_createCompounder.php';
$snakeCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? '_' : '') + strtolower($word);
});
return 'snakeCase';
