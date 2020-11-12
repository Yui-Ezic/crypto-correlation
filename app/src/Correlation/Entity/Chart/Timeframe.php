<?php

declare(strict_types=1);

namespace App\Correlation\Entity\Chart;

class Timeframe
{
    private const FIVE_MINUTES = '5m';

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function fiveMinutes(): self
    {
        return new self(self::FIVE_MINUTES);
    }
}