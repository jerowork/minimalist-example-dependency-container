<?php

declare(strict_types=1);

namespace Jerowork\DependencyContainer;

final class Container
{
    /**
     * @param array<string, callable(Container): object> $definitions
     */
    public function __construct(private readonly array $definitions)
    {
    }

    public function get(string $key): object
    {
        return $this->definitions[$key]($this);
    }
}
