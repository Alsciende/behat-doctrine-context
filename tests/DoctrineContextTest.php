<?php

namespace Tests;

use Alsciende\Behat\DoctrineContext;
use Doctrine\Common\Persistence\ConnectionRegistry;
use PHPUnit\Framework\TestCase;

class DoctrineContextTest extends TestCase
{
    public function testCreation()
    {
        $doctrine = $this->createMock(ConnectionRegistry::class);
        $objectUnderTest = new DoctrineContext($doctrine);
        $this->assertInstanceOf('Alsciende\Behat\DoctrineContext', $objectUnderTest);
    }
}
