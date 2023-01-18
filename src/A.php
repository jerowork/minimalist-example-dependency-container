<?php

declare(strict_types=1);

namespace Jerowork\DependencyContainer;

final class A
{
    public function __construct(private B $b, private C $c)
    {
    }

    public function run(string $var) : string
    {
        return sprintf('[A] %s', $this->c->run($this->b->run($var)));
    }
}
