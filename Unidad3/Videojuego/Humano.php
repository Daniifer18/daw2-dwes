<?php

class Humano implements Personaje{

    use Coordenadas;

    public function atacar(): void{
        echo "<p>Puñetazo</p>";
    }
    public function defender(): void{
        echo "<p>Bloqueo</p>";
    }

}


?>