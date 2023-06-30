<?php

declare(strict_types=1);

namespace Tests\Unit\BoundedContext\Application\UseCase;

use App\BoundedContext\Application\UseCase\CreateEntity;
use App\BoundedContext\Domain\Entity\Entity;
use App\BoundedContext\Domain\Repository\EntityRepository;
use PHPUnit\Framework\TestCase;

class CreateEntityTest extends TestCase
{
    public function testIsAbleToCreateEntity()
    {
        $repository = $this->createMock(EntityRepository::class);
        $sut = new CreateEntity($repository);

        $repository->expects($this->once())
            ->method('save')
            ->with(new Entity());

        $result = $sut();

        $this->assertTrue($result);
    }
}
