<?php

require 'vendor/autoload.php';

use App\Result;
use App\ResultItem;

use App\Engine\Wikipedia\WikipediaEngine;
use App\Engine\Wikipedia\WikipediaParser;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Helper\Table;

class SearchCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('search')
            ->setDescription('Busca pelo termo')
            ->addArgument('name', InputArgument::REQUIRED, 'The person name');
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $wikipedia = new WikipediaEngine(new WikipediaParser(), HttpClient::create());

      //try aqui
    }
}
$app = new Application();
$app->add(new SearchCommand());
$app->run();
