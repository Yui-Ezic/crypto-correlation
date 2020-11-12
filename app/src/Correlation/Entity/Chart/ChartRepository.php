<?php

declare(strict_types=1);

namespace App\Correlation\Entity\Chart;

interface ChartRepository
{
    public function get(Symbol $symbol, Period $period, Timeframe $timeframe): Chart;
}