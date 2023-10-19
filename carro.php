<?php

class Car
{
    private $color ='red';
    private $numberOfTires = 4;
    public function __construct($color)
    {
        $this->color = $color;
    }
    public function __destruct()
    {
        echo "Objeto está sendo destruído";
    }
    public function setColor($val)
    {
            $this->color = $val;
    }
    public function getColor()
    {
            return $this->color;
    }
}

$bmw = new Car("white");
echo $bmw->color;
echo $bmw->getColor();
$bwm->setColor("black");
echo $bmw->getColor();
?>