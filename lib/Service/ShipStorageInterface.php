<?php

namespace Service;

Interface ShipStorageInterface
{
    /**
     * Returns an array of ship arrays, with keys id, name, weaponPower, defense.
     *
     * @return array
     */
    public function fetchAllShipsData();

    /**
     * @param integer $id
     * @return array()o
     */
    public function fetchSingleShipData($id);
}
