<?php


class BancoMalvado implements PlataformaPago{

    public function estableceConexion():bool{
        echo "<p>conexión BancoMalvado</p>";
        return true;
    }

    public function compruebaSeguridad():bool{
        echo "<p>conexión segura BancoMalvado</p>";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad){
        echo "<p>Pago realizado de ".$cuenta." (BancoMalvado) con una cantidad ".$cantidad."</p>";
    }
    
}

?>