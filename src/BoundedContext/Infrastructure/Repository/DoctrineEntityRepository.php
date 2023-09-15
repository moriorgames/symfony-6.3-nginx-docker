<?php

declare(strict_types=1);

namespace App\BoundedContext\Infrastructure\Repository;

use App\BoundedContext\Domain\Entity\SomeEntity;
use App\BoundedContext\Domain\Repository\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;

class DoctrineEntityRepository implements EntityRepository
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    public function save(SomeEntity $entity): void
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }
}
