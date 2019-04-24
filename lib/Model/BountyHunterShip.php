<?php


namespace Model;


class BountyHunterShip
{
    use SettableJediFactorTrait;

    public function getType()
    {
        return 'Bounty Hunter';
    }
    public function isFunctional()
    {
        return true;
    }
}
