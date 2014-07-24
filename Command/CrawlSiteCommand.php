<?php
namespace MWSimple\CrawlSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
//crawler
use Goutte\Client;

/**
 * @author Gonzalo Alonso <gonkpo@gmail.com
 */
class CrawlSiteCommand extends ContainerAwareCommand
{
    protected $em;
    protected $values = array();
    protected $repository = 'AcmeDemoBundle:CrawlSite';

    protected function configure()
    {
        $this
            ->setName('mwsimple:crawlsite')
            ->setDescription('MWS Crawl Site')
            // ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            // ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->em = $this->getContainer()->get('doctrine')->getManager();
        $sites = $this->em->getRepository($this->repository)->findSites();

        $text = 'Exito';

        $client = new Client();
        foreach ($sites as $site) {
            echo $site->getDomain().'/'.$site->getUrl()."\n";
            // Go to the symfony.com website
            $crawler = $client->request('GET', $site->getDomain().'/'.$site->getUrl());
            // Get the latest post in this category and display the titles
            $this->values[$site->getId()] = $crawler->filter($site->getPattern())->each(function ($node) use ($site) {
                $valuesTags = array();
                foreach ($site->getTags() as $tag) {
                    //si utiliza algun atributo entra
                    if ($tag->getTagUseAttr()) {
                        $valuesTags[$tag->getField()] = $node->filter($tag->getTag())
                            ->eq($tag->getIdArray())->attr($tag->getTagUseAttr());
                        //si la imagen necesita del dominio entra
                        if ($tag->getSrcImgUseDomain()) {
                            $valuesTags[$tag->getField()] = $site->getDomain().'/'.$valuesTags[$tag->getField()];
                        }
                    } else {
                        $valuesTags[$tag->getField()] = $node->filter($tag->getTag())
                            ->eq($tag->getIdArray())->text();
                    }
                }
                return $valuesTags;
            });
        }

        $output->writeln($text);
    }

}