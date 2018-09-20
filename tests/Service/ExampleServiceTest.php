<?php

namespace App\Tests\Api\Infrastructure\Controller;


use App\Service\Service;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ExampleServiceTest extends KernelTestCase
{
    /**
     * @test
     */
    public function it_should_work(): void
    {
        self::bootKernel();
        $class = self::$container->get(Service::class);
        var_dump($class);
        $this->assertFalse(true);
    }
}
