<?php


namespace src;


abstract class  Animal
{
    protected $name;
    protected $habitat;
    protected $food;

    public function __toString()
    {
        return $this->name . $this->habitat . $this->food;
    }

}