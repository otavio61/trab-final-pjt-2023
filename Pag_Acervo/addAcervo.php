<?php
    include "../conexao.php";

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $desc = $_POST["desc"];
        $foto_File = $_FILES["img"]["tmp_name"];
        $foto_Name = uniqid("img", true) . "." . pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

        if(!$conn){
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        if(move_uploaded_file($foto_File, "../images/acervo/" . "$foto_Name")){
            if(mysqli_query($conn, "INSERT INTO `acervo`(`NOME`, `DESCRICAO`, `FOTO`) VALUES ('$nome','$desc','$foto_Name')")){
            echo "<script>alert('Item adicionado no acervo')</script>";
            }
        }else{
            echo "<script>alert('Ocorreu um erro, tente novamente')</script>";
        }
    }
    header("Location: acervo.php");
?>

