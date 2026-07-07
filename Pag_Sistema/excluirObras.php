<?php
    include "../conexao.php";

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $busca = mysqli_query($conn, "SELECT * FROM `acervo` WHERE `ID` = $id");

        if(mysqli_num_rows($busca) != 0){
            $item = mysqli_fetch_assoc($busca);
            $foto = $item["FOTO"];

            if(unlink("../images/acervo/" . "$foto")){
                mysqli_query($conn, "DELETE FROM `acervo` WHERE `ID` = $id");
                mysqli_query($conn, "DELETE FROM `comentarios` WHERE `ID_ACERVO` = '$id'");
            }
        }
        
        header("Location: obras.php");
        exit;
    }
?>