<?php

// I had fixed errors not only about SOLID principle but also other errors.

interface AreaInterface
{
    public  function calculateArea();
}

class Rectangle implements AreaInterface
{
    private $width;
    private $height;

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function calculateArea(){
        $area = $this->getWidth() *  $this->getHeight();
        return $area;
    }
}
  
class Circle implements AreaInterface
{
    private $radius;
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function calculateArea(){
        $area = $this->getRadius() * $this->getRadius() * pi();
        return $area;
    }
}

class Square implements AreaInterface
{
    private $length;

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function calculateArea(){
        $area = $this->getLength() * $this->getLength();
        return $area;
    }
}

class CostManager
{
    public function calculate(AreaInterface $shape)
    {
        $costPerUnit = 1.5;
        $totalCost = $costPerUnit * $shape->calculateArea();
        return $totalCost;
    }
}

$circle = new Circle();
$circle->setRadius(5);

$rect = new Rectangle();
$rect->setWidth(8);
$rect->setHeight(5);

$sqr = new Square();
$sqr->setLength(5);

$obj = new CostManager();
echo $obj->calculate($circle)."\n";
echo $obj->calculate($rect)."\n";
echo $obj->calculate($sqr);


?>