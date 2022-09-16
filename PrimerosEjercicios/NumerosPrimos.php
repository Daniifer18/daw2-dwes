<?php function esPrimo($numero){
    $retorno = true;
    for ($i = 2; $i <= $numero/2 && $retorno; $i++) {

        if (($numero % $i) == 0) {

            $retorno = false;

        }
    }
    return $retorno;
    
} ?>
<html>
    <head>
        <title>
            Bienvenidos a php
        </title>
        <style>
            td{
                border: none;
            }
            #primo{
                background-color: green;
            }
            #no-primo{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <table border=1>
            <?php  $num = 1;for ($i = 1;$i <= 10 ;$i++) { ?>
                <tr>
                    <?php for ($j = 1; $j < 11 ;$j++) { 
                        if(esPrimo($num)){ ?>
                            <td id="primo">
                                <?php echo $num++; ?>
                            </td>
                        <?php }else{ ?>
                            <td id="no-primo">
                                <?php echo $num++; ?>
                            </td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
