<?php

namespace App\Command;

use App\Entity\ListView;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Dumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[AsCommand(name: 'app:test:test')]
class TestCommand extends Command
{
    public function __construct(
        private readonly SerializerInterface $serializer
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $listView = new ListView(true, false, true, false);

        $output->writeln($this->serializer->serialize($listView, 'json'));

        return self::SUCCESS;
    }
}
