<?php 

interface IQuadrilatero
{
    public function setHeight($h);

    public function setWidth($w);

    public function getArea();
}

class Retangle implements IQuadrilatero
{
    public function setHeight() { }

    public function setWidth() { }

    public function getArea() { }
}

class Square implements IQuadrilatero
{
    public function setHeight() { }

    public function setWidth() { }

    public function getArea() { }
}