<?php


namespace src;


class Cat extends Predator
{
    protected $catName;
    protected $vote = 'grrrrrrr....' . PHP_EOL;

    public function __construct($catName)
    {
        $this->catName = $catName;

    }

    public function __toString()
    {
        return parent::__toString() . $this->catName;
    }

    public function nmakeSound()
    {
        return $this->vote;
    }


}