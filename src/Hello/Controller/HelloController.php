<?php

namespace Hello\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Hello\Model\Hello;

class HelloController
{

    public function homeAction(Request $request)
    {
        return new Response('Home Page');
    }

    public function indexAction(Request $request, $name)
    {
        $isName = new Hello();
        if ($name == '') {
            return new Response($isName->getHello());
        }
        return new Response($isName->getHello($name));
    }
}