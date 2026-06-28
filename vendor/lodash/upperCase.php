<?php
$createCompounder = require __DIR__ . '/_createCompounder.php';
$upperCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? ' ' : '') + strtoupper($word);
});
return 'upperCase';
