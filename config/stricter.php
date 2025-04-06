<?php

// config for Kauffinger/Stricter
return [
    'models' => [
        'should_be_strict' => true,
        'unguard' => true,
    ],
    'commands' => [
        'prohibit_destructive_commands' => true,
    ],
    'url' => [
        'force_https' => true,
    ],
];
