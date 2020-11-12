<?php


namespace App\Correlation\Entity\Chart;


class Symbol
{
    private const BTCUSDT = 'BTCUSDT';

    private string $value;

    public function __construct(string $value)
    {
        //TODO:: add validation
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function BTCUSDT(): self
    {
        return new self(self::BTCUSDT);
    }
}