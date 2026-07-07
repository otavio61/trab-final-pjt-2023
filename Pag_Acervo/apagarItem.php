<?php
    include "../conexao.php";

    if(isset($_POST["nome_R"])){
        $nome = $_POST["nome_R"];

        $busca = mysqli_query($conn, "SELECT `FOTO`, `ID` FROM `acervo` WHERE `NOME` = '$nome'");

        if(mysqli_num_rows($busca) != 0){
            $item = mysqli_fetch_assoc($busca);
            $foto = $item["FOTO"];
            $id = $item["ID"];

            if(unlink("../images/acervo/" . "$foto")){
                mysqli_query($conn, "DELETE FROM `acervo` WHERE `NOME` = '$nome'");
                mysqli_query($conn, "DELETE FROM `comentarios` WHERE `ID_ACERVO` = '$id'");
            }
        }
        
        header("Location: acervo.php");
        exit;
    }
?>