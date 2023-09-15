<?php

declare(strict_types=1);

namespace App\BoundedContext\Domain\Repository;

use App\BoundedContext\Domain\Entity\SomeEntity;

interface EntityRepository
{
    public function save(SomeEntity $entity): void;
}
