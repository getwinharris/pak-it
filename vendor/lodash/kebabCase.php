<?php
$createCompounder = require __DIR__ . '/_createCompounder.php';
$kebabCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? '-' : '') + strtolower($word);
});
return 'kebabCase';
