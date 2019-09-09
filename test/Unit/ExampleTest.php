<?php

declare(strict_types=1);

namespace Spawnia\Library\Test\Unit;

use PHPUnit\Framework;
use Spawnia\Library\Example;

final class ExampleTest extends Framework\TestCase
{
    public function testGreetIncludesName(): void
    {
        $name = 'spawnia';
        $example = new Example($name);

        self::assertStringContainsString($name, $example->greet());
    }
}
