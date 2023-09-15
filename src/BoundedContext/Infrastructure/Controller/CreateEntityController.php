<?php

declare(strict_types=1);

namespace App\BoundedContext\Infrastructure\Controller;

use App\BoundedContext\Application\UseCase\CreateEntity;
use App\BoundedContext\Application\UseCase\CreateEntityRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateEntityController extends AbstractController
{
    #[Route('/create', name: 'create_entity', methods: ['POST'])]
    public function index(CreateEntity $createEntity): Response
    {
        $type = 'one';
        $request = new CreateEntityRequest($type);
        $result = $createEntity->__invoke($request);
        
        return new Response("El resultado es: " . $result->type);
    }
}
