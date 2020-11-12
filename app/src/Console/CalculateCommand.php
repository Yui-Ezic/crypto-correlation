<?php


namespace App\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CalculateCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('calculate')
            ->setDescription('Calculate crypto correlation and write it to google sheet. (Not complete)');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Will be soon");
        return Command::SUCCESS;
    }
}