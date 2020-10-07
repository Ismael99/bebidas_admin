<?php
    session_start();
    $_POST = $_SESSION["post"];
    $_SESSION["post"] = "";

    $localhost = "localhost";
    $username = "ismaelo";
    $password = "ismaelo0605";
    $db = "bebida_db";

    $mysqli = mysqli_connect($localhost, $username, $password, $db);

    if (mysqli_connect_errno()){
        echo"Error de conexión a la BD:".mysqli_connect_error();
        exit();
    }   
?>