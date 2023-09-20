<?php

declare(strict_types=1);

namespace Integration\BoundedContext\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreateEntityControllerTest extends WebTestCase
{
    public function testCreateEntity(): void
    {
        $client = static::createClient();

        $client->request('POST', '/create');

        $this->assertResponseIsSuccessful();
    }
}
