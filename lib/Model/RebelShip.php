<?php


class RebelShip extends AbstractShip
{
    public function getFavoriteJedi()
    {
        $coolJedi = ['Yoda', 'Ben Kenobi'];
        $key = array_rand($coolJedi);

        return $coolJedi[$key];
    }

    public function getType()
    {
        return 'Rebel';
    }

    public function isFunctional()
    {
        return true;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if($useShortFormat){
            return sprintf(
                '%s: %s/%s/%s (Rebel)',
                $this->getName(),
                $this->getWeaponPower(),
                $this->getJediFactor(),
                $this->getStrength()
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s (Rebel)',
                $this->getName(),
                $this->getWeaponPower(),
                $this->getJediFactor(),
                $this->getStrength()
            );
        }
    }

    public function getJediFactor()
    {
        return rand(10,30);
    }
}
