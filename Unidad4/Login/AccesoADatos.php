<?php

class AccesoADatos{

    const HOST = "localhost:3306";
    const USUARIO = "root";
    const PASSWORD = "111aaa";
    const DBNAME = "usuarios";
    
    private PDO $conn;

    private static AccesoADatos $datos;

    public static function getSingletone(){
        if(!isset($datos)){
            self::$datos = new AccesoADatos();
        }
        
        return self::$datos;
    }

    private function __construct(){

        try {
            /**
            * Abrir conexion a base de datos.
            */
            $this->conn = new PDO('mysql:host='. self::HOST .';dbname='. self::DBNAME ,self::USUARIO, self::PASSWORD);
        
            /**
            * Añadimos atributos a la conexion. Lanza excepciones cuando falle y el Fetch te devuelve arrays asociativos.
            */
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "\n";
            die();
        }
    }

    //Devielve array con todos los ciclistas que van en arrays asociativos
    public function findUsers() : array{

        $usuarios = [];

        try {
            /**
             * Preparar la consulta
            */
            $stmt = $this->conn->prepare('SELECT * FROM usuarios');
        
            /**
             * Ejecutamos la consulta
            */
            if($stmt->execute()){
                $usuarios = $stmt->fetchAll();
            }else{
                //Not good
            }
        } catch (\Throwable $th) {
            //Excapcion al hacer la consulta
        }

        return $usuarios;
    }
    
    /**
     * Devuelve el ciclista con el id selecionado
    */
    public function findUserById(int $id){

        $usuarios = [];

        try {
        
            $stmt = $this->conn->prepare('SELECT * FROM usuarios WHERE id = :id');
        
            if($stmt->execute(
                array(':id' => $id)
            )){

                $usuarios = $stmt->fetchAll();
    
            }else{
                //Not good
            }


        } catch (\Throwable $th) {
            //Excapcion al hacer la consulta
        }

        return $usuarios;
    }


    public function findUsersByEmail(string $e) : array{

        $usuarios = [];

        try {
            /**
             * Preparar la consulta
            */
            $stmt = $this->conn->prepare('SELECT * FROM usuarios WHERE email = :email');
        
            /**
             * Ejecutamos la consulta
            */
            $stmt->execute(
                array(":email" => $e)
            );

            $resultado = $stmt->fetchAll();

            $usuarios = (!empty($resultado)) ? $resultado[0] : [] ;


        } catch (\Throwable $th) {
            //Excapcion al hacer la consulta
        }

        return $usuarios;
    }


    public function findUsersByEmailAndPass(string $e,string $p) : array{

        $usuarios = [];

        try {
            /**
             * Preparar la consulta
            */
            $stmt = $this->conn->prepare('SELECT * FROM usuarios WHERE email = :email AND pass = :pass');
        
            /**
             * Ejecutamos la consulta
            */
            $stmt->execute(
                array (':email' => $e,
                ':pass' => $p
            )
            );

            $resultado = $stmt->fetchAll();

            $usuarios = (!empty($resultado)) ? $resultado[0] : [] ;

        } catch (\Throwable $th) {
            //Excapcion al hacer la consulta
        }

        return $usuarios;
    }
    public function insertUser(array $parametros){

        $exito = false;

        try {
        
            $stmt = $this->conn->prepare('INSERT INTO usuarios(email,pass) VALUES (:email,:pass)');
        
            $exito = $stmt->execute(
                array(
                    ':email' => $parametros['email'],
                    ':pass' => $parametros['pass']
                )
            );

        } catch (\Throwable $th) {
            //Excapcion al hacer la consulta
        }

        return $exito;
    }

    public function deleteUser(int $id){

        $exito = false;

        try {
        
            $stmt = $this->conn->prepare('DELETE FROM usuarios WHERE id = :id');
        
            $exito = $stmt->execute(
                array(
                    ':id' => $id
                )
            );

        } catch (\Throwable $th) {
            //Excapcion al hacer la consulta
        }

        return $exito;
    }
}


$usu = AccesoADatos::getSingletone();



?>