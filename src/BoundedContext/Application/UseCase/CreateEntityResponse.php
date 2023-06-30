<?php

declare(strict_types=1);

namespace App\BoundedContext\Application\UseCase;

class CreateEntityResponse
{
    public function __construct(public readonly string $type)
    {
    }
}
