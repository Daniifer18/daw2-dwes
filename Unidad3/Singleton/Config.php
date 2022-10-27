<?php 

class Config{

    private static Config $instancia;

    private string $nombreApp;

    public static function singleton()
    {
        if (!isset(self::$instancia)) {
            self::$instancia = new Config();
        }
        return self::$instancia;
    }

    private function __construct() {}

    public function getNombreApp(){
        return $this->nombreApp;
    }


    public function setNombreApp($nombreApp){
        $this->nombreApp = $nombreApp;
    }


    public function mostrarUser(){
        echo "<p>".$this->nombreApp."</p><br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singleton ejercicio</title>
    <style>
        body{
            background-color: lightblue;
        }
        p{
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>
        Singleton funcionamiento
    </h1>
    <?php 
        $usuario1 = Config::singleton();
        $usuario2 = Config::singleton();
        $usuario3 = Config::singleton();

        $usuario1->setNombreApp("Amazon");
        $usuario2->setNombreApp("WhatsApp");
        $usuario3->setNombreApp("Instagram");
        
        $usuario1->mostrarUser();
        $usuario2->mostrarUser();
        $usuario3->mostrarUser();
    ?>
</body>
</html>