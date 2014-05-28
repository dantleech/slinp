<?php

namespace Slinp\SlinpBundle\Routing;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RequestContext;

class SlinpUrlGenerator implements UrlGeneratorInterface
{
    protected $context;

    public function getContext() 
    {
        return $this->context;
    }
    
    public function setContext(RequestContext $context)
    {
        $this->context = $context;
    }
    

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
    }
}
