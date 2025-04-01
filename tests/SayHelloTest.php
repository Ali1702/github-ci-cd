<?php

use PHPUnit\Framework\TestCase;

use function Ali\HelloScenario\sayHello;

require_once __DIR__.'/../vendor/autoload.php';

class SayHelloTest extends TestCase
{
    public function test_normal_name()
    {
        $this->assertSame('Hello, Alice!', sayHello('Alice'));
    }

    public function test_empty_name()
    {
        $this->assertSame('Hello, mysterious stranger!', sayHello(''));
    }
}