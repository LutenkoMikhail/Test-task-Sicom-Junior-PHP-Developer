<?php


namespace src;


class Wolf extends Canidae
{

    public function __construct($canidName)
    {
        $this->canidName = $canidName;
    }

    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    public function setWaysFood($waysGetFood)
    {
        $this->waysGetFood = $waysGetFood;
    }

    public function __toString()
    {
        return parent::__toString() . $this->vote . $this->waysGetFood;
    }
}