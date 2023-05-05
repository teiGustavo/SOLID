<?php

interface Bird
{
    public function setLocation($longitude, $latitude);

    public function renderize();
}

interface FlyingBirds
{
    public function setAltitude($altitude);
}

class Parrot implements FlyingBirds
{
    public function setLocation($longitude, $latitude)
    {
    }

    public function setAltitude($altitude)
    {
    }

    public function renderize()
    {
    }
}

class Penguin implements Bird
{
    public function setLocation($longitude, $latitude)
    {
    }

    public function renderize()
    {
    }
}