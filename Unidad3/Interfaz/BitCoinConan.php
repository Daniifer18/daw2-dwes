<?php

class BitCoinConan implements PlataformaPago{

    public function estableceConexion():bool{
        echo "<p>conexión BitCoinConan</p>";
        return true;
    }

    public function compruebaSeguridad():bool{
        echo "<p>conexión segura BitCoinConan</p>";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad){
        echo "<p>Pago realizado de ".$cuenta." (BitCoinConan) con una cantidad ".$cantidad."</p>";
    }

}

?>