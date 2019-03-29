<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Core\Log;

/**
 * A Sample Console Command
 *
 * @author JasyDong <jasydong@qq.com>
 */
class Sample extends Command
{
    // the name of the command
    protected static $defaultName = 'sample:sample';

    protected function configure() {
        // short description shown while running "bin/console list"
        $this->setDescription('A Sample Console Command');
        // "--help" option
        $this->setHelp('A Sample Console Command');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        // outputs multiple lines to the console
        $output->writeln([
            'A Sample Console Command',
            '========================',
        ]);

        // outputs a message
        $output->writeln('Hello, Sample Console Command!');
        // add a log
        Log::info('Sample Console Command Executed');
    }
}
