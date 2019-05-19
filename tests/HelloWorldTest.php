<?php declare(strict_types=1);

namespace GuillermoandraeTest;

use PHPUnit\Framework\TestCase;
use Guillermoandrae\HelloWorld;

final class HelloWorldTest extends TestCase
{
    public function testGreet()
    {
        $this->assertSame('Hello, world!', HelloWorld::greet());
    }

    public function testGreetWithName()
    {
        $this->assertSame('Hello, John!', HelloWorld::greet('John'));
    }
}
