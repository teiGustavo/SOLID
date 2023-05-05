<?php

class Hero 
{
    private $id;
    private $name;
    private $health;
    private $power;

    public function __construct($pId, $pName, $pHealth, $pPower)
    {
        $this->id = $pId;
        $this->name = $pName;
        $this->health = $pHealth;
        $this->power = $pPower;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getPower()
    {
        return $this->power;
    }
}

class HeroFormatter
{
    public static function toHtml(Hero $pHero)
    {
        $str = "<p>";
            $str .= "<span>Refatorado</span><br/>";
            $str .= "<span>Name: " . $pHero->getName() . " </span><br/>";
            $str .= "<span>Health: " .$pHero->getHealth() . " </span><br/>";
            $str .= "<span>Power: " .$pHero->getPower() . " </span><br/>";
        $str .= "</p>";
        return $str;
    }
}

$hulk = new Hero(1, "Hulk", 100, 200);
var_dump($hulk);

//print HeroFormatter::toHtml($hulk);