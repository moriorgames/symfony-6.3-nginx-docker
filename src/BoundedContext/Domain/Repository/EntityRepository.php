<?php

namespace App\BoundedContext\Domain\Repository;

use App\BoundedContext\Domain\Entity\Entity;

interface EntityRepository
{
    public function save(Entity $entity): void;
}
