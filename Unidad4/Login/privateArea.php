<?php

session_start();


if (!isset($_SESSION["user"]) || $_SESSION["user"] == "") {
    header('Location: login.php?error=Area privada&url=premio.php');
    exit;
}

?>