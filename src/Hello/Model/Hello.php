<?php

namespace Hello\Model;

/**
 * Class Hello
 * @package Hello\Model
 */
class Hello
{
    /**
     * @var string $name
     */
    protected $name;

    /**
     * Hello constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    /**
     * @param string $name
     * @return string
     */
    public function getHello(): string
    {
        return 'Hello ' . $this->name;
    }
}