<?php

declare(strict_types=1);

namespace Jerowork\DependencyContainer;

final class C
{
    public function run(string $var) : string
    {
        return sprintf('[C] %s', $var);
    }
}
