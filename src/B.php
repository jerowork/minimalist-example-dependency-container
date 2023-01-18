<?php

declare(strict_types=1);

namespace Jerowork\DependencyContainer;

final class B
{
    public function __construct(private C $c)
    {
    }

    public function run(string $var) : string
    {
        return sprintf('[B] %s', $this->c->run($var));
    }
}
