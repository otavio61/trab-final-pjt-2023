<?php
    include "../conexao.php";

    $count  = mysqli_query($conn, "SELECT ID FROM `comentarios`");

    while($i = mysqli_fetch_array($count)){
        if(isset($_POST["c_{$i['ID']}"])){
            $comentario = $_POST["c_{$i['ID']}"];
            mysqli_query($conn, "UPDATE `comentarios` SET `COMENTARIO` = '$comentario' WHERE `ID` = {$i['ID']} AND `ID_USUARIO` = {$_SESSION["id_usuario"]}");
        }
    }

  header("Location: acervo.php");
  exit;
?>

