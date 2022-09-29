<?php 
    $horario = [
        ["Horas","16:00<br>16:55","16:55<br>17:50","17:50<br>18:45","18:45<br>19:10","19:10<br>20:05","20:05<br>21:00","21:00<br>21:55"],
        ["Lunes","DWEC","DWEC","DWEC","recreo","EIE_DAW","EIE_DAW","ITG_DAW"],
        ["Martes","ITG2_DAW","DAW","DAW","recreo","DIW","DIW","DIW"],
        ["Miércoles","DIW","DIW","DIW","recreo","DWES","DWES","DWES"],
        ["Jueves","EIE_DAW","DAW","DAW","recreo","DWES","DWES","DWES"],
        ["Viernes","DWES","DWES","DWES","recreo","DWEC","DWEC","DWEC"],
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color: lightgray;
        }
        #centro{
            margin: 0 auto;
            margin-top: 3%;
        }
        table{
            background-color: white;
            box-shadow: 10px 5px 5px black;
        }
        #rec{
            background-color: lightgray;
            border-color: lightgrey;
        }
        #dia{
            background-color: black;
            color: white;
        }
        #dia:hover{
            background-color: green;
        }
        td{
            border: 1px solid black;
        }
        td:hover{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 table-responsive-sm" id="centro">
            <table class="table">
                <?php for($i = 0;$i < count($horario[0]);$i++){ ?>
                    <tr>
                        <?php for($j = 0;$j < count($horario);$j++){
                            if($horario[$j][$i] == "Horas" ||$horario[$j][$i] == "Lunes" || $horario[$j][$i] == "Martes" || $horario[$j][$i] == "Miércoles" || $horario[$j][$i] == "Jueves" || $horario[$j][$i] == "Viernes"){  ?>
                                <td id="dia">
                                    <?php echo $horario[$j][$i] ?>
                                </td>
                            <?php } else if($horario[$j][$i] == "recreo"||$horario[$j][$i] == "18:45<br>19:10"){ ?>
                                <td id="rec">
                                    <?php echo $horario[$j][$i] ?>
                                </td>
                            <?php }else{ ?>
                                <td>
                                    <?php echo $horario[$j][$i] ?>
                                </td>
                            <?php } ?>
                        <?php } ?>
                    </tr>                   
                <?php } ?>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>
