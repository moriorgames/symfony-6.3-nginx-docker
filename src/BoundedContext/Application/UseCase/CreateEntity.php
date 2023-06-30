<?php

declare(strict_types=1);

namespace App\BoundedContext\Application\UseCase;

use App\BoundedContext\Domain\Entity\Entity;
use App\BoundedContext\Domain\Repository\EntityRepository;
use Tests\BoundedContext\Domain\Enum\Type;

class CreateEntity
{
    public function __construct(private readonly EntityRepository $repository)
    {
    }

    public function __invoke(CreateEntityRequest $request): CreateEntityResponse
    {
        $entity = new Entity(Type::from($request->type));
        $this->repository->save($entity);

        return new CreateEntityResponse($entity->type->value);
    }
}