<?php

namespace Zacksleo\SuningSdk\Command;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MapCommand extends Command
{
    const GATEWAY = 'http://open.suning.com';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('map:generate')
            ->setDescription('生成map文件')
            ->addArgument('page-id', InputArgument::OPTIONAL, 'interTypePageId')
            ->addOption('fake', '生成FakeCommand专用的map');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /*
        $key = $this->getBizName('http://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.custom.complaint.get');
        var_dump($key);
        exit;
        */
        $output->writeln('正在解析 API 文档首页...');
        $html = file_get_contents(self::GATEWAY.'/ospos/apipage/toApiListMenu.do');
        $crawler = new Crawler($html);
        $catalogs = $crawler->filterXpath("//*[contains(@class,'ap-conT')]")->each(function (Crawler $node, $i) {
            return self::GATEWAY.$node->attr('href');
        });
        $bar = new ProgressBar($output, count($catalogs));
        $bar->setMessage('正在解析分类页面');
        $bar->start();
        $bar->setFormat('%message%'.PHP_EOL.'%bar% %percent:3s% %'.PHP_EOL.'time:  %elapsed:6s%/%estimated:-6s%'.PHP_EOL.PHP_EOL);
        $bar->setBarCharacter('<info>'.$bar->getBarCharacter().'</info>');
        $raw = <<<PHP
<?php

return [\n
PHP;
        $menus = [];
        $total = 0;
        foreach ($catalogs as $catalog) {
            $html = file_get_contents($catalog);
            $crawler = new Crawler($html);
            $subLinks = $crawler->filterXpath("//*[contains(@class,'go-liList')]")->each(function (Crawler $node, $i) {
                return [
                    'link'        => self::GATEWAY.$node->attr('href'),
                    'method'      => $node->text(),
                    'description' => $node->nextAll()->text(),
                ];
            });
            $node = $crawler->filterXpath('//*[@id="logi"]/span');
            $comment = <<<BLOCK
    /*
    |--------------------------------------------------------------------------
    | {$node->text()}
    |--------------------------------------------------------------------------
    |
    | @see {$catalog}
    |
    */\n
BLOCK;
            $menus[] = [
                'comment' => $comment,
                'links'=> $subLinks,
            ];
            $total += count($subLinks);

            $bar->advance();
        }
        $bar->finish();
        $output->writeln('');
        $bar = new ProgressBar($output, $total);
        $bar->setFormat('%message%'.PHP_EOL.'%bar% %percent:3s% %'.PHP_EOL.'time:  %elapsed:6s%/%estimated:-6s%'.PHP_EOL.PHP_EOL);
        $bar->setBarCharacter('<info>'.$bar->getBarCharacter().'</info>');
        $bar->setMessage('开始解析子页面...');
        $bar->start();
        $keys = [];
        foreach ($menus as $menu) {
            $raw .= $menu['comment'];
            foreach ($menu['links'] as $link) {
                $bar->setMessage($link['description']);
                $key = $this->getBizName($link['link']);
                $fake = $input->getOption('fake') ?? false;
                if ($fake) {
                    $raw .= <<<BLOCK
                    '{$link['method']}'         => ['{$key}' => '{$link['description']}'], \n
BLOCK;
                } else {
                    //$prefix = '';
                    if (! in_array($link['method'], $keys)) {
                        $keys[] = $link['method'];
                        $raw .= <<<BLOCK
    '{$link['method']}' => '{$key}', // {$link['description']} \n
BLOCK;
                    } else {
                        //$prefix = '//';
                    }
                }
                $bar->advance();
            }
        }
        $raw .= <<<'PHP'
    ];
PHP;
        $bar->finish();
        file_put_contents(__DIR__.'/map.php', $raw);
    }

    private function getBizName($url)
    {
        $html = file_get_contents($url);
        $node = (new Crawler($html))->filterXpath("//*/div[contains(@class,'pr-con4')]//input[contains(@type,'hidden')][2]");
        if (preg_match('/\"([a-zA-Z]+)\"/', $node->attr('value'), $matches)) {
            return $matches[1];
        }
        $node = (new Crawler($html))->filterXpath("//*/div[contains(@class,'pr-con4')]//div/pre")->each(function (Crawler $node, $i) {
            return $node->html();
        });
        $nodes = json_decode(html_entity_decode($node[1]), true);
        if (! $nodes) {
            $node = (new Crawler($html))->filterXpath("//*/div[contains(@class,'pr-con4')]//input[contains(@type,'hidden')][2]");
            $nodes = json_decode(html_entity_decode($node->attr('value')), true);
            if (! $nodes) {
                echo $node->attr('value');
                echo html_entity_decode($node->attr('value'));
                var_dump($nodes);
                var_dump(json_last_error());
                exit;
            }

            return key($nodes['sn_request']['sn_body']);
        }
        $key = key($nodes['sn_request']['sn_body']);

        return $key;
    }
}
