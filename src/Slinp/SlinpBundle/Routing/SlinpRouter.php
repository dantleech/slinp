<?php

namespace Slinp\SlinpBundle\Routing;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;

class SlinpRouter implements RouterInterface, RequestMatcherInterface
{
    protected $matcher;
    protected $generator;

    public function __construct(RequestMatcherInterface $matcher, UrlGeneratorInterface $generator)
    {
        $this->matcher = $matcher;
        $this->generator = $generator;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        return $this->generator->generate($name, $parameters, $referenceType);
    }

    public function matchRequest(Request $request)
    {
        return $this->matcher->matchRequest($request);
    }

    public function getRouteCollection()
    {
    }

    public function match($pathinfo)
    {
        throw new \InvalidArgumentException(sprintf(
            'Match not implemented by Slinp Router'
        ));
    }

    public function setContext(RequestContext $context)
    {
        // this is not used as we use the RequestMatcher interface, but we are
        // forced to implement these context methods anyway.
    }

    public function getContext()
    {
        throw new \InvalidArgumentException(sprintf(
            'Context not implemented by Slinp Router'
        ));
    }
}
