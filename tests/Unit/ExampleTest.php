<?php

declare(strict_types=1);

namespace Spawnia\PhpLibraryTemplate\Tests\Unit;

use PHPUnit\Framework;
use Spawnia\PhpLibraryTemplate\Example;

class ExampleTest extends Framework\TestCase
{
    public function testGreetIncludesName(): void
    {
        $name = 'spawnia';
        $example = new Example($name);

        self::assertStringContainsString($name, $example->greet());
    }
}
