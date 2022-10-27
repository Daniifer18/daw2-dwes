<?php 

class BancoMaloMalisimo implements PlataformaPago{

    public function estableceConexion():bool{
        echo "<p>conexión BancoMaloMalísimo</p>";
        return true;
    }

    public function compruebaSeguridad():bool{
        echo "<p>conexión segura BancoMaloMalísimo</p>";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad){
        echo "<p>Pago realizado de ".$cuenta." (BancoMaloMalisimo) con una cantidad ".$cantidad."</p>";
    }
}


?>