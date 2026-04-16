<?php

declare(strict_types=1);

namespace Supabase\Functions;

class Functions
{
    public function __construct(
        private string $url,
        private string $token
    ) {}
}
