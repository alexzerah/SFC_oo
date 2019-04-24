<?php

namespace Model;

class BattleResult implements \ArrayAccess
{
    private $losingShip;
    private $usedJediPowers;
    private $winningShip;

    public function __construct($usedJediPowers, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return boolean
     */
    public function WereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return AbstractShip|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @return AbstractShip|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }

    public function offsetExists($offset)
    {
        return property_exists($this, $offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }


}
