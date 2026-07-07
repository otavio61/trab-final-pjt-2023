<?php
	include "../conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icons/icone.png">
    <link rel="stylesheet" type="text/css" href="login_files/css/util.css">
		<link rel="stylesheet" type="text/css" href="login_files/css/main.css">
    <link rel="stylesheet" href="login_files/css/adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA DE GERENCIAMENTO</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA DE GERENCIAMENTO DO MUSEU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sistema.php" style="width: max-content !important; margin-right: 5px !important;" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br>
    <h1>Cadastrando uma nova Obra</h1>
    <br>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" class="login100-form validate-form" enctype="multipart/form-data">

                    <div id="error-message"></div>

                    <!---------------------Campo nome--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É preciso um nome valido">
                        <input class="input100" type="text" name="nome" placeholder="Nome da obra" required>
                        <span class="focus-input100"></span>
                    </div>

                    <!---------------------Campo Descrição--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É preciso uma descrição válida">
                        <textarea name='desc' style="padding: 13px 30px 0 40px;" class="input100" style='color: black' placeholder="Descrição" required></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <!---------------------Campo Foto--------------------->
                    <div class="wrap-input100 validate-input" style="color: black; display: flex" data-validate = "É preciso de uma foto válida">
                     Imagem da obra: <input type='file' style="padding: 10px 30px 0 40px;" class="input100" style='color: black' name='img' accept='image/jpeg, image/jpg, image/png' required>
                        <span class="focus-input100"></span>
                    </div>	

                    <div class="container-login100-form-btn">
                        <input type="submit" value="Registrar" class="login100-form-btn"></input>
                    </div>
                </form>
                <?php
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
                                echo "<script>document.getElementById('error-message').setText= 'Item adicionado no acervo'</script>";
                            }
                        }else{
                            echo "<script>document.getElementById('error-message').setText= 'Ocorreu um erro ao carregar a foto, tente novamente</script>";
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</body>
</html>