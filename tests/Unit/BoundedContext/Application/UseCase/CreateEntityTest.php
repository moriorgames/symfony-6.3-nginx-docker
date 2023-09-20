<?php

declare(strict_types=1);

namespace Tests\Unit\BoundedContext\Application\UseCase;

use App\BoundedContext\Application\UseCase\CreateEntity;
use App\BoundedContext\Application\UseCase\CreateEntityRequest;
use App\BoundedContext\Domain\Entity\SomeEntity;
use App\BoundedContext\Domain\Enum\EntityType;
use App\BoundedContext\Domain\Repository\EntityRepository;
use Prophecy\Argument;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ObjectProphecy;
use Tests\Unit\UnitBaseTestCase;
use ValueError;

class CreateEntityTest extends UnitBaseTestCase
{
    private CreateEntity $sut;
    private ObjectProphecy $repository;
    private MethodProphecy $repositoryExpectation;

    protected function setUp(): void
    {
        parent::setUp();

        /** @var ObjectProphecy|EntityRepository $repository */
        $this->repository = $this->prophet->prophesize(EntityRepository::class);
        $this->sut = new CreateEntity($this->repository->reveal());
    }

    public function testThrowsExceptionWhenNoValidType()
    {
        $this->expectException(ValueError::class);

        $request = new CreateEntityRequest('Fake Value');
        $this->sut->__invoke($request);
    }

    public function testIsAbleToCreateEntityFromTypeOne()
    {
        $this->repositoryExpectation = $this->repository->save(Argument::type(SomeEntity::class));

        $request = new CreateEntityRequest(EntityType::ONE->value);
        $result = $this->sut->__invoke($request);

        $this->assertEquals(EntityType::ONE->value, $result->type);
        $this->repositoryExpectation->shouldBeCalledOnce();
    }

    public function testIsAbleToCreateEntityFromTypeTwo()
    {
        $this->repositoryExpectation = $this->repository->save(Argument::type(SomeEntity::class));

        $request = new CreateEntityRequest(EntityType::TWO->value);
        $result = $this->sut->__invoke($request);

        $this->assertEquals(EntityType::TWO->value, $result->type);
        $this->repositoryExpectation->shouldBeCalledOnce();
    }
}
