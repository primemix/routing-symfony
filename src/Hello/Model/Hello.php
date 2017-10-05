<?php

namespace Hello\Model;

/**
 * Class Hello
 * @package Hello\Model
 */
class Hello
{
    /**
     * @param null $name
     * @return string
     */
    public function helloName($name = null): string
    {
        if (null == $name) {
            $name = 'GeekHub!';
        }
        
        return 'Hello ' . $name;
    }
}