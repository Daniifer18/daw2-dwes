<?php

$productos = [
    "Naranja" => 1.2,
    "Manzana" => 1.5,
    "Pera" => 1.8,
    "Platano" => 0.8,
    "Kiwi" => 0.75,
    "Macarrones" => 0.5,
    "Arroz" => 0.75,
    "Salchichas" => 1,
    "Patatas_fritas" => 3,
    "Paninis" => 1.5,
    "Leche_6_uds" => 5,
    "Pizza_jamon_serrano" => 2.59,
    "Helado_chocolate" => 2.99
];
/*Funcion del array que me devuelve las claves del array*/
$producto = array_keys($productos);
/*Funcion del array que me devuelve los valores del array*/
$precio = array_values($productos);

$subtotal = 0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de la compra</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{
                background-color: lightgrey;
            }
            #centro{
                margin-top: 2%;
            }
            table{
                width: 100%;
                border-radius: 3px;
                background-color: white;
                box-shadow: 10px 5px 5px grey;
            }
            th,#total{
                background-color: blue;
                color: white;
            }
            .ho{
                border-radius: 3px;
            }
            .ho:hover{
                background-color: lightgreen;
            }
            .cab{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="centro">
                <div>
                    <form  method="GET" action="EjMarioJasonDani.php">
                        <table>
                            <th colspan="3" class="cab">
                                --Lista de productos--
                            </th>
                            <?php for($i = 0; $i < count($productos); $i++) { ?>
                                <tr>
                                    <td id="poduct" class="ho">
                                        <?php echo $producto[$i]?>
                                    </td>
                                    <td id="price" class="ho">
                                        <?php echo $precio[$i]?>
                                    </td>
                                    <td id="cantidad" class="ho">
                                        <input type="number" value=0 min=0 max=100 name="<?php echo $producto[$i] ?>">
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="3" class="cab">
                                    <input type="submit" value="Generar factura" class="btn btn-primary btn-block">
                                </tr>
                            </tr>
                        </table>
                    </form>
                </div>
                <br><br>
                <?php if(isset($_GET[$producto[0]])){ ?>
                    <div>
                        <table id="factura">
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <?php for ($i=0; $i < count($producto); $i++) { ?>
                                <?php if(isset($_GET[$producto[$i]]) && $_GET[$producto[$i]] != 0){ ?>
                                    <tr>
                                        <td id="poduct" class="ho">
                                            <?php echo $producto[$i]?>
                                        </td>
                                        <td id="price" class="ho">
                                            <?php echo $precio[$i]?>
                                        </td>
                                        <td id="cantidad" class="ho">
                                            <?php $subtotal += $_GET[$producto[$i]] * $precio[$i]; 
                                            echo $_GET[$producto[$i]] * $precio[$i] ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>   
                            <tr id="total">
                                <td>
                                    Precio total:
                                </td>
                                <td colspan="2" class="cab">
                                    <?= $subtotal ?>
                                </td>
                            </tr>         
                        </table>
                    </div>
                <?php } ?>    
            <div class="col-md-3"></div>
        </div>
    </body>
</html>