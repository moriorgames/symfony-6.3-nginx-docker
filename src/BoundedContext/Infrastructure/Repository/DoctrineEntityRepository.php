<?php

declare(strict_types=1);

namespace App\BoundedContext\Infrastructure\Repository;

use App\BoundedContext\Domain\Entity\Entity;
use App\BoundedContext\Domain\Repository\EntityRepository;

class DoctrineEntityRepository implements EntityRepository
{
    public function save(Entity $entity): void
    {
    }
}
