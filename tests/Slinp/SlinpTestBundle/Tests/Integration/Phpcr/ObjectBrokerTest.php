<?php

namespace Slinp\SlinpBundle\Tests\Integration\Routing;

use Slinp\Component\Routing\SlinpMatcher;
use Symfony\Component\HttpFoundation\Request;
use Slinp\Bundle\SlinpBundle\Test\WebTestCase;
use Slinp\Component\NodeMapper\ObjectBroker;

class ObjectBrokerTest extends WebTestCase
{
    protected $broker;
    protected $session;

    public function setUp()
    {
        parent::setUp();
        $this->loadFixtures('website.xml');

        $this->broker = new ObjectBroker(array(
            'slinpTest:article' => 'Slinp\SlinpTestBundle\SlinpObject\Article',
            'slinp:resource' => 'Slinp\SlinpTestBundle\SlinpObject\Resource',
        ));

        $this->session = $this->getContainer()->get('doctrine_phpcr')->getConnection();
    }

    public function testBroker()
    {
        $node = $this->session->getNode('/slinp/web/root/articles/Faster-than-light');
        $this->broker->objectForNode($node);
    }
}
