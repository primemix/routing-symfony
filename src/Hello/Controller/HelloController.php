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
        $hello = new Hello();

        return new Response($hello->helloName($name));
    }
}