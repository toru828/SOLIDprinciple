<?php

class Rectangle
{
    protected $width;
    protected $height;

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
}

/*
About class Square, it violated Dependency Inversion Principle.
If we changed the function for rectangle, the function for Square also be changed.
*/
class Square extends Rectangle
{
    public function setWidth($width)
    {
        parent::setWidth($width);
        parent::setHeight($width);
    }

    public function setHeight($height)
    {
        parent::setHeight($height);
        parent::setWidth($height);
    }
}

/*
About class Circle. Same as class Rectangle.
*/
class Circle
{
    public $radius;
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
}

/*
About class CostManager, it violated Open-closed Principle. 
Because when we add some other shape like triangle,
we need not only add new class but also fix class CostManager.
*/
class CostManager
{
    public function calculate($shape)
    {
        $costPerUnit = 1.5;
        if ($shape instanceof Rectangle) {
            $area = $shape->width * $shape->height;
        } else {
            $area = $shape->radius * $shape->radius * pi();
        }
        
        return $costPerUnit * $area;
    }
}
$circle = new Circle();
$circle->setRadius(5);

$rect = new Rectangle();
$rect->setWidth(8);
$rect->setHeight(5);

$sqr = new Square();
$sqr->setWidth(5);

$obj = new CostManager();
echo $obj->calculate($circle);

?>