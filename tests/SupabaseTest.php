<?php

declare(strict_types=1);

namespace Supabase\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Supabase\Functions\Functions;

#[CoversClass(Functions::class)] // Changed from Database::class
class SupabaseTest extends TestCase
{
    #[Test]
    public function test_create_connection()
    {
        $function = new Functions('https://example.com', 'tyt');

        $this->assertInstanceOf(Functions::class, $function);
    }
}
