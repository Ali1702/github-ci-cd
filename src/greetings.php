<?php

namespace Ali\HelloScenario;

function sayHello(string $name): string
{
    return $name === ''
        ? 'Hello, mysterious stranger!'
        : "Hello, {$name}!";
}