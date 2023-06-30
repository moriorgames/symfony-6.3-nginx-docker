<?php

declare(strict_types=1);

namespace App\BoundedContext\Domain\Entity;

use App\BoundedContext\Domain\Enum\EntityType;

class Entity
{
    public function __construct(public readonly EntityType $type)
    {
    }
}
