<?php

class ShipLoader
{
    /**
     * @return Ship[]
     */
    public function get_ships()
    {
       $shipsData = $this->queryForShips();

        $ships = [];
        foreach ($shipsData as $shipData) {
            $ships[] = $this->createShipFromData($shipData);
        }

        return $ships;
    }

    /**
     * @param $id
     * @return Ship|null
     */
    public function findOneById($id)
    {
        $config = require 'config.php';
        $pdo = new PDO($config['database_dsn'], $config['database_user'], $config['database_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM ship WHERE id = :id');
        $statement->execute(['id' => $id]);
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        return $this->createShipFromData($shipArray);
    }

    /**
     * @param array $shipData
     * @return Ship
     */
    private function createShipFromData(array $shipData)
    {
        $ship = new Ship($shipData['name']);
        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setJediFactor($shipData['jedi_factor']);
        $ship->setStrength($shipData['strength']);

        return $ship;
    }

    /**
     * @return Ship[]
     */
    private function queryForShips()
    {
        $config = require 'config.php';
        $pdo = new PDO($config['database_dsn'], $config['database_user'], $config['database_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
