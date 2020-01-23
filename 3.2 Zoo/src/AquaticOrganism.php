<?php


namespace src;


class AquaticOrganism extends Animal
{
    protected $name = 'Aquatic organism' . PHP_EOL;
    protected $habitat = 'Water' . PHP_EOL;
    protected $typeWater;
    protected $nameOrganism;

    public function __construct($typeWater, $nameOrganism)
    {
        $this->typeWater = $typeWater;
        $this->nameOrganism = $nameOrganism;
    }

    public function __toString()
    {
        return $this->name . $this->habitat . $this->typeWater . $this->nameOrganism;
    }
}