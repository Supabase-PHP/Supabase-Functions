<?php

declare(strict_types=1);

namespace Supabase\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(TestCase::class)]
class ExampleTest extends TestCase
{
    #[Test]
    public function test_tow_number()
    {
        $this->assertSame(2, 2);
    }
}
