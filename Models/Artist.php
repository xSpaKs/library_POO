<?php

class Artist 
{
    private string $name;

    public function setName($name)
    {
        $this->name = $name;
        return $this->name;
    }

    public function getName($name)
    {
        return $this->name;
    }

    function __construct($name)
    {
        $this->name = $name;
    }
}