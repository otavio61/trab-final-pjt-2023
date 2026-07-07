<?php
    session_start();
    if(!$_SESSION["id_usuario"]){
        header("Location: ../login.php");
        exit;
    }

    $conn = mysqli_connect("localhost", "root", "", "museum_db");

    if(!$conn){
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }
?>