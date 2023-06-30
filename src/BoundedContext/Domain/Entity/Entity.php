<?php

declare(strict_types=1);

namespace App\BoundedContext\Domain\Entity;

use Tests\BoundedContext\Domain\Enum\Type;

class Entity
{
    public function __construct(public readonly Type $type)
    {
    }
}
