<?php
  include "../conexao.php";

  if(isset($_GET["id_coment"])){

    $id = $_GET["id_coment"];

    if($_SESSION["tipo_usuario"] == 0 || $_SESSION["tipo_usuario"] == 1){
      mysqli_query($conn, "DELETE FROM `comentarios` WHERE `ID` = $id");
    }else{
      mysqli_query($conn, "DELETE FROM `comentarios` WHERE `ID` = $id AND `ID_USUARIO` = {$_SESSION["id_usuario"]}");
    }
  }
  header("Location: acervo.php");
?>