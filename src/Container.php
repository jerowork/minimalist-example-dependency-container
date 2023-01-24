<?php

declare(strict_types=1);

namespace Jerowork\DependencyContainer;

final class Container
{
    private array $instantiated = [];

    /**
     * @param array<string, callable(Container): object> $definitions
     */
    public function __construct(private readonly array $definitions)
    {
    }

    public function get(string $key): object
    {
        if (isset($this->instantiated[$key])) {
            return $this->instantiated[$key];
        }

        $this->instantiated[$key] = $this->definitions[$key]($this);

        return $this->instantiated[$key];
    }
}
