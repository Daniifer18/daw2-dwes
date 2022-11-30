<?php 

namespace ValidarUsuario\src\data;

use Exception;
use Unidad4\BDD\Usuario;


class AccesoFicheros {
    
    private const NOMBRE_FICHERO = "Usuarios.csv";
    private static AccesoFicheros $accesoADatos;

    private function __construct() {}

    public static function getSingletone() : AccesoFicheros {
        if (!isset(self::$accesoADatos)) {
            self::$accesoADatos = new AccesoFicheros ();
        }
        return self::$accesoADatos;
    }

    public function escribirFichero(Usuario $usuario) {
        file_put_contents(
            filename: self::NOMBRE_FICHERO,
            data: $usuario->toCSV() . "\n", 
            flags: FILE_APPEND
        );
    }

    public function leerFichero() : array {
        $array = [];
        if (file_exists(self::NOMBRE_FICHERO)) {
            $lineas = explode("\n", file_get_contents(self::NOMBRE_FICHERO));
            try {
                for($i = 0; $i < count($lineas)-1; $i++) {
                    $array[] = Usuario::fromCSV($lineas[$i]);
                }
            } catch (Exception $th) {
                
            }
        }
        
        return $array;
    }
    
}