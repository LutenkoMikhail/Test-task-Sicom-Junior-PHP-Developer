<?php


namespace src;


class LandAnimal extends Animal
{
    protected $name = 'Land animal' . PHP_EOL;
    protected $habitat = 'Land' . PHP_EOL;
    protected $vote;

    public function makeSound(): string
    {
        return $this->vote;
    }


}