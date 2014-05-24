<?php

namespace Slinp\SlinpBundle\Tests\Functional;

use Slinp\SlinpBundle\Test\WebTestCase;

class WebsiteTest extends WebTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->loadFixtures('website.xml');
    }

    public function testIndex()
    {
        $client = $this->createClient();
        $client->request('GET', '/');
        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('Slinp Web Content Framework', $response->getContent());
    }
}
