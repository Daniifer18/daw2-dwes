<?php
    $cosa = 5;
    $fin = 10
?>
<html>
    <head>
        <title>
            Bienvenidos a php
        </title>
    </head>
    <body>
        <table border=1>
            <tr><td colspan=2>Algoritmo</td></tr>
            <?php 
                for ($i = 0;$i <= $fin;$i++) {
                    echo "<tr><td border=none>" .$cosa . " x " . $i . "</td><td border=none> " . $cosa*$i . "</td></tr>";
                } 
            ?>  
        </table>
        <br>
		<table border=1>
        <tr><td colspan="2" style="text-align: center;">Algoritmo</td></tr>
        <?php $num = 5; 
            for ($i=0; $i <= $fin; $i++) { ?>
            
            <tr>
                <td>
                    <?php echo $num;?> x <?php  echo $i; ?>
                </td> 
                <td>
                    <?php echo $num*$i;?>
                </td>
            </tr>
        <?php } ?>
    </table>
    </body>
</html>
