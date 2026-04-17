<?php declare(strict_types=1);

namespace Supabase\Tests;

use Supabase\Functions\Functions as Functions;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Database::class)]
class SupabaseTest extends TestCase
{
    #[Test]
    public function test_create_connection(){
        $function = new Functions('https://exame.com', 'tyt');

        $this->assertInstanceOf(Functions::class, $function);
    }
}
