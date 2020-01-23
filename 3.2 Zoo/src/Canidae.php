<?php


namespace src;


class Canidae extends Predator
{
    protected $canidName;
    protected $vote = 'vouuuu.....' . PHP_EOL;
    protected $waysGetFood;

    public function __toString()
    {
        return parent::__toString() . $this->canidName . PHP_EOL;
    }
}