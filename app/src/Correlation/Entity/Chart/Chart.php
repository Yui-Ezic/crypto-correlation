<?php

declare(strict_types=1);

namespace App\Correlation\Entity\Chart;

class Chart
{
    private string $symbol;
    private array $candles;
    private Timeframe $timeframe;
    private Period $period;

    public function __construct(string $symbol, array $candles, Timeframe $timeframe, Period $period)
    {
        $this->symbol = $symbol;
        $this->candles = $candles;
        $this->timeframe = $timeframe;
        $this->period = $period;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getCandles(): array
    {
        return $this->candles;
    }

    public function getTimeframe(): Timeframe
    {
        return $this->timeframe;
    }

    public function getPeriod(): Period
    {
        return $this->period;
    }
}