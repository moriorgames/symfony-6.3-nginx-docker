<?php

declare(strict_types=1);

namespace App\BoundedContext\Domain\Repository;

use App\BoundedContext\Domain\Entity\Entity;

interface EntityRepository
{
    public function save(Entity $entity): void;
}
