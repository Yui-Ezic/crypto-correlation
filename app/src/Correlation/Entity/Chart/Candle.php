<?php

declare(strict_types=1);

namespace App\Correlation\Entity\Chart;

use DateTimeImmutable;

class Candle
{
    private DateTimeImmutable $openTime;
    private Price $price;

    public function __construct(DateTimeImmutable $openTime, Price $price)
    {
        $this->openTime = $openTime;
        $this->price = $price;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getOpenTime(): DateTimeImmutable
    {
        return $this->openTime;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }
}