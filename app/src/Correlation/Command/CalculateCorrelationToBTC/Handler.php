<?php

declare(strict_types=1);

namespace App\Correlation\Command\CalculateCorrelationToBTC;

use App\Correlation\Entity\Chart\ChartRepository;
use App\Correlation\Entity\Chart\Period;
use App\Correlation\Entity\Chart\Symbol;
use App\Correlation\Entity\Chart\Timeframe;
use App\Correlation\Service\Calculator;
use App\Correlation\Service\CorrelationWriter;
use DateTimeImmutable;

class Handler
{
    private ChartRepository $charts;
    private Calculator $calculator;
    private CorrelationWriter $correlationWriter;

    public function __construct(ChartRepository $charts, Calculator $calculator, CorrelationWriter $correlationWriter)
    {
        $this->charts = $charts;
        $this->calculator = $calculator;
        $this->correlationWriter = $correlationWriter;
    }

    public function handle(Command $command): void
    {
        /**
         * 1. Получаем свечи биткоина за предыдущий день
         * 2. Получаем свечи альта за предыдущий день
         * 3. Считаем корреляцию
         * 4. Записываем ее в гугл таблицу
         */
        $period = new Period(new DateTimeImmutable("yesterday"), new DateTimeImmutable('today'));
        $btcusdt = $this->charts->get(Symbol::BTCUSDT(), $period, Timeframe::fiveMinutes());
        $altcoin = $this->charts->get(new Symbol($command->altcoin), $period, Timeframe::fiveMinutes());
        $correlation = $this->calculator->calculateCorrelation($altcoin, $btcusdt);
        $this->correlationWriter->write($correlation);
    }
}