<?php

namespace Zacksleo\SuningSdk\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FakeCommand extends Command
{
    const GATEWAY = 'http://open.suning.com';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('fake:generate')
            ->setDescription('生成 Fake Class');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('正在读取 map...');
        $map = require_once __DIR__.'/map.php';
        $keys = array_keys($map);
        $classes = [];
        foreach ($keys as $key) {
            $arr = explode('.', $key);
            $classes[$arr[1]][$arr[2]][] = [$arr[3] => current($map[$key])];
        }
        $topProperty = '';
        foreach ($classes as $class => $subClasses) {
            $className = ucfirst($class);
            //为Suning类生成property
            $topProperty .= <<<PHP
 * @property \Zacksleo\SuningSdk\\Fake\\{$className}\\{$className} \${$class}\n
PHP;
            $property = '';
            foreach ($subClasses as $subClass => $methods) {
                $subClassName = ucfirst($subClass);
                $property .= <<<PHP
 * @property \Zacksleo\SuningSdk\\Fake\\{$className}\\{$subClassName} \${$subClass}\n
PHP;

                $methodRaw = '';
                foreach ($methods as $subMethods) {
                    foreach ($subMethods as $method=>$comment) {
                        $methodRaw .= <<<PHP
 * @method array {$method}(\$method, \$params, \$files = []) {$comment}\n
PHP;
                    }
                }

                //生成子类
                $raw = <<<PHP
<?php

namespace Zacksleo\SuningSdk\\Fake\\{$className}\\{$subClassName};

/**
 * {$subClassName} Class
 *
{$methodRaw} */
class {$subClassName}
{
}

PHP;
                \file_put_contents(__DIR__.'/../../fake/'.$className.'/'.$subClassName.'.php', $raw);
            }
            $raw = <<<PHP
<?php

namespace Zacksleo\SuningSdk\\Fake\\{$className};

/**
 * {$className} Class
 *
{$property} */
class {$className}
{
}

PHP;
            if (! is_dir(__DIR__.'/../../fake/'.$className)) {
                mkdir(__DIR__.'/../../fake/'.$className);
            }
            \file_put_contents(__DIR__.'/../../fake/'.$className.'/'.$className.'.php', $raw);
        }

        \file_put_contents(__DIR__.'/comment.txt', $topProperty);
    }
}
