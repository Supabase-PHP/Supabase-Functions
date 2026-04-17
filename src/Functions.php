<?php

declare(strict_types=1);

namespace Supabase\Functions;

class Functions
{
    /**
     * @param  string  $url  Supabase URL
     * @param  string  $token  Supabase Token
     */
    public function __construct(
        private readonly string $url,
        private readonly string $token
    ) {}

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer '.$this->token,
            'apikey' => $this->token,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
