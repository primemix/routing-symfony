<?php

namespace Hello\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Hello\Model\Hello;

class HelloController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request): Response
    {
        return new Response('Home Page');
    }

    /**
     * @param Request $request
     * @param string $name
     * @return Response
     */
    public function indexAction(Request $request, $name): Response
    {
        if ( ! $name) {
            $hello = new Hello($name = 'GeekHub!');

            return new Response($hello->getHello());
        }

        $hello = new Hello($name);

        return new Response($hello->getHello());
    }
}