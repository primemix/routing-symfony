<?php

namespace Hello\Model;

class Hello
{
    public function getHello($name = 'GeekHub!')
    {
        return 'Hello ' . $name;
    }
}