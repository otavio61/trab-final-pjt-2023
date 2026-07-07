<?php
	include "../conexao.php";

	$id_Usuario = $_GET["id"];
	$imagem_usuario = $_GET["imagem_usuario"];
	$tipo_usuario = $_GET["tipo_usuario"];

	if($tipo_usuario != 0 && $id_Usuario != 1){

		if($tipo_usuario != 1 && $imagem_usuario != "admMestre.png" && $imagem_usuario != "adm.png"){
			unlink("../images/usuarios/{$imagem_usuario}");
		}

		mysqli_query($conn, "DELETE FROM usuarios WHERE ID = $id_Usuario");
		
		mysqli_query($conn, "DELETE FROM comentarios WHERE ID_USUARIO = $id_Usuario");

		if($_SESSION["id_usuario"] == $id_Usuario)
			header("Location: ../logout.php");
		else
			header("Location: sistema.php");

	}
	header("Location: sistema.php");
?>

