<?php

interface IShape
{
    public function area();
}

class Retangle implements IShape {
    public $width;
    public $height;

    public function __construct($rWidth, $rHeight)
    {
        $this->width = $rWidth;
        $this->height = $rHeight;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle implements IShape {
    public $radius;

    public function __construct($cRadius)
    {
        $this->radius = $cRadius;
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}

class Board
{
    public $shapes;

    public function calculateArea()
    {
        $area = 0;
        foreach ($this->shapes as $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}

$retangulo = new Retangle(5,10);
$circulo = new Circle(5);

var_dump($retangulo, $retangulo->area());
var_dump($circulo, $circulo->area());