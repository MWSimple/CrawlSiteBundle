<?php
namespace MWSimple\CrawlSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
//crawler
// use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

/**
 * This class crawls the Acme site
 *
 * @author  Joe Sexton <joe@webtipblog.com
 */
class CrawlSiteCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mwsimple:crawlsite')
            ->setDescription('Greet someone')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = '';
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $client = new Client();
            // Go to the symfony.com website
            $crawler = $client->request('GET', 'http://www.symfony.com/blog/');
            // Get the latest post in this category and display the titles
            $crawler->filter('div.post > div > h2')->each(function ($node) {
                print $node->text()."\n";
            });
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}