<?php

declare(strict_types=1);

use Jerowork\DependencyContainer\A;
use Jerowork\DependencyContainer\B;
use Jerowork\DependencyContainer\C;

require __DIR__ . '/vendor/autoload.php';

$a = new A(new B(new C()), new C());

echo $a->run('Title');

echo PHP_EOL.PHP_EOL;

print_r($a);
