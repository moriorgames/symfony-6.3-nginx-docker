<?php

declare(strict_types=1);

namespace App\BoundedContext\Domain\Entity;

use App\BoundedContext\Domain\Enum\EntityType;

class SomeEntity
{
    private $id;
    public readonly string $type;

    public function __construct(public readonly EntityType $entityType)
    {
        $this->setType($this->entityType);
    }

    private function setType(EntityType $entityType): void
    {
        $this->type = $entityType->value;
    }

    public function getType(): EntityType
    {
        return EntityType::from($this->type);
    }
}
