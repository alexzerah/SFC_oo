<?php


class BattleResult
{
    private $losingShip;
    private $usedJediPowers;
    private $winningShip;

    public function __construct($winningShip, $losingShip, $usedJediPowers)
    {
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
    }

    /**
     * @return boolean
     */
    public function WereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @return Ship
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }
}
