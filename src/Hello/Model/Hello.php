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
    public function helloName(string $name): string
    {
        if (empty($name)) {
            $name = 'GeekHub!';
        }

        return 'Hello ' . $name;
    }
}
