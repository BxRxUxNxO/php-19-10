<?php
class Car
{
        private $color = 'red';
        private $numberOfTires = 4;
        public static $country = "Canada";
        public function _construct($color)
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
//echo $bmw->color; //Apresentará erro porque a propriedade color é privada
echo $bmw->getColor();
$bmw->setColor("black");
echo $bmw->getColor();
echo Car::$country;
?>