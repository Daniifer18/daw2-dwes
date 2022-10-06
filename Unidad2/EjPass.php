<?php
    set_time_limit(0);
    $pass = "$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72";
    $ok = false;
    $newpass;
    $clave = "";
    /*97-122*/

    for ($i=97; $i <=115 && !$ok; $i++) { 

        for ($j=97; $j <=122 && !$ok; $j++) { 

            for ($k=97; $k <=122 && !$ok; $k++) { 

                for ($l=97; $l <=122 && !$ok; $l++) { 
                    $newpass = chr($i).chr($j).chr($k).chr($l);
                    if(password_verify($newpass,$pass)){
                        $clave = $newpass;
                        $ok = true;
                    }         
                }
            }
        }
    }
    echo $clave;

?>