<?php class Circulo{
    private const PI = 3.14;
    private $radio;

    public function __construct(){
        $this->radio;
    }

    public function setRadio($radio){
        $this->radio = $radio;
    }

    public function getRadio(){
        return $this->radio;
    }

    public function area(){
        return (self::PI * pow($this->radio,2));
    }
} ?>