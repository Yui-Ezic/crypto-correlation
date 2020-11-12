<?php

declare(strict_types=1);

namespace App\Correlation\Entity\Chart;

class Price
{
    private int $open;
    private int $close;
    private int $high;
    private int $low;

    public function __construct(int $open, int $close, int $high, int $low)
    {
        $this->open = $open;
        $this->close = $close;
        $this->high = $high;
        $this->low = $low;
    }

    public function getOpen(): int
    {
        return $this->open;
    }

    public function getClose(): int
    {
        return $this->close;
    }

    public function getHigh(): int
    {
        return $this->high;
    }

    public function getLow(): int
    {
        return $this->low;
    }
}