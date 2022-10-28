<?php

abstract class Mago implements Personaje{

    use Coordenadas;

    public function defender(): void{
        echo "<p>Hechizo protector</p>";
    }

    public abstract function atacar():void;
}

?>