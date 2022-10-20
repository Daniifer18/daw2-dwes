<?php class CuentaBancaria{

    private static int $numCuentaFinal = 100000;
    private string $numCuenta;
    private string $nombre;
    private float $saldo;

    public function __construct(string $nombre = "Anonimo",float $saldo = 0){
        $this->numCuenta = ++CuentaBancaria::$numCuentaFinal;
        $this->nombre = $nombre;
        $this->saldo = $saldo;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setNumCuenta($numCuenta){
        $this->numCuenta = $numCuenta;
    }

    public function getNumCuenta(){
        return $this->numCuenta;
    }
 
    public function retirar(float $dinero){
        $this->saldo -= $dinero;
    }

    public function ingresar(float $dinero){
        $this->saldo += $dinero;
    }

    public function transferirA(CuentaBancaria $cuentaBancaria, float $cantidad){
        $this->saldo -= $cantidad;
        $cuentaBancaria->ingresar($cantidad);
    }

    public function bancarrota(){
        $this->saldo = 0;
    }

    public function invalidarCuenta(){
        $this->numCuenta = -1;
        $this->saldo = 0;
    }

    public function unirCon(CuentaBancaria $cuentaBancaria){
        $this->saldo += $cuentaBancaria->getSaldo();
        $cuentaBancaria->invalidarCuenta();
    }

    public function mostrar(){ ?>
        <div>
            <span>
                Número de cuenta: <?= $this->numCuenta ?>
            </span>
            <br>
            <span>
                Nombre del titular de la cuenta: <?= $this->nombre ?>
            </span>
            <br>
            <span>
                Saldo de la cuenta: <?= $this->saldo ?>
            </span>
        </div>
    <?php } 

} ?>