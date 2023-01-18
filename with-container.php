<?php

declare(strict_types=1);

use Jerowork\DependencyContainer\A;
use Jerowork\DependencyContainer\B;
use Jerowork\DependencyContainer\C;
use Jerowork\DependencyContainer\Container;

require __DIR__ . '/vendor/autoload.php';

$definitions = [
    A::class => fn (Container $container) => new A($container->get(B::class), $container->get(C::class)),
    B::class => fn (Container $container) => new B($container->get(C::class)),
    C::class => fn () => new C(),
];

$container = new Container($definitions);

$a = $container->get(A::class);

echo $a->run('Title');

echo PHP_EOL.PHP_EOL;

print_r($a);
