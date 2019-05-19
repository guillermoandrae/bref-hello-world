<?php declare(strict_types=1);

namespace Guillermoandrae;

final class HelloWorld
{
    /**
     * Returns a greeting using a name if it's provided.
     *
     * @param   string $name OPTIONAL The name to use in the greeting
     * @return  string                The greeting
     */
    public static function greet(string $name = null): string
    {
        return 'Hello, ' . ($name ?? 'world') . '!';
    }
}
