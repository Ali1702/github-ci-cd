<?php

namespace App;

function sayHello(string $name): string
{
    return $name === ''
        ? 'Hello, mysterious stranger!'
        : "Hello, {$name}!";
}
