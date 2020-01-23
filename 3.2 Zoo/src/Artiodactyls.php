<?php


namespace src;


class Artiodactyls extends LandAnimal
{
    protected $food = 'Plant food' . PHP_EOL;
    protected $nameArtiodactyl;

    public function __construct($nameArtiodactyl, $vote)
    {
        $this->nameArtiodactyl = $nameArtiodactyl;
        $this->vote = $vote;
    }

    public function __toString()
    {
        return parent::__toString() . $this->nameArtiodactyl . $this->vote;
    }
}