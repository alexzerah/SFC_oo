<?php

namespace Model;

class Ship extends AbstractShip
{
    private $jediFactor = 0;
    private $underRepair;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->underRepair = mt_rand(1, 100) < 30;
    }


    /**
     * @return mixed
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param mixed $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function getType()
    {
        return 'Empire';
    }
}
