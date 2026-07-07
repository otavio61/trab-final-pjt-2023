
<?php
  include "../conexao.php";

  $count = mysqli_query($conn, "SELECT * FROM `acervo`");

  while($i = mysqli_fetch_array($count)){

    if(isset($_POST["coment_{$i['ID']}"])){

      $coment = $_POST["coment_{$i['ID']}"];
      
      $id_usuario = $_SESSION["id_usuario"];
      $nome_usuario = $_SESSION["nome_usuario"];
      $foto_usuario = $_SESSION["imagem_usuario"];
      

      mysqli_query($conn, "INSERT INTO `comentarios`(`COMENTARIO`, `ID_ACERVO`, `ID_USUARIO`, `NOME_USUARIO`, `FOTO_USUARIO`) VALUES ('$coment', {$i["ID"]}, $id_usuario,'$nome_usuario','$foto_usuario')");
      header("Location: acervo.php");
      exit;
    }
  }
?>


