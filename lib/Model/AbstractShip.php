<?php

namespace Model;

use \Exception;

abstract class AbstractShip
{
    private $id;
    private $name;
    private $strength = 0;
    private $weaponPower = 0;

    abstract public function getJediFactor();
    abstract public function getType();
    abstract public function isFunctional();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo 'Hello!';
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if($useShortFormat){
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param mixed $strength
     */
    public function setStrength($strength)
    {
        if (!is_numeric($strength)) {
            throw new Exception('invalid strength passed '. $strength);
        }

        $this->strength = $strength;
    }

    /**
     * @return mixed
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param mixed $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    public function __toString()
    {
        return $this->getName();
    }


}
