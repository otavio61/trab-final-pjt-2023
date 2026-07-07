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
    <h1>Cadastrando um novo administrador</h1>
    <br>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" class="login100-form validate-form" enctype="multipart/form-data">

                    <div id="error-message"></div>

                    <!---------------------Campo nome--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É preciso um nome valido">
                        <input class="input100" type="text" name="nome" placeholder="Nome Completo" required>
                        <span class="focus-input100"></span>
                    </div>

                    <!---------------------Campo Nick--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É preciso um nick valido">
                        <input class="input100" type="text" name="nick" minlength="5" placeholder="Nick para visualizção" required>
                        <span class="focus-input100"></span>
                    </div>

                    <!---------------------Campo Email--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É preciso de um email valido Ex: abc@def.ghi">
                        <input class="input100" type="email" name="email" placeholder="Email" required>
                        <span class="focus-input100"></span>
                    </div>	

                    <!---------------------Campo senha--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É necessário uma senha valida">
                        <input class="input100"  type="password" minlength="8" name="senha" placeholder="Senha" required>
                        <span class="focus-input100"></span>
                    </div>

                    <!---------------------Campo Telefone--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É necessário um telefone valido">
                        <input class="input100" type="tel"  name="telefone" placeholder="Telefone" required>
                        <span class="focus-input100"></span>
                    </div>

                    <!---------------------Campo Cidade--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É necessário uma cidade valida">
                        <input class="input100" type="text" name="cidade" placeholder="Sua cidade" required>
                        <span class="focus-input100"></span>
                    </div>

                    <!---------------------Campo Idade--------------------->
                    <div class="wrap-input100 validate-input" data-validate = "É necessário uma idade valida">
                        
                        <input class="input100" type="date" name="data_Nascimento" placeholder="Data de nascimento" required>
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <input type="submit" value="Registrar" class="login100-form-btn"></input>
                    </div>
                </form>
                <?php
                    if(isset($_POST["nome"])){
                        $nome = $_POST["nome"];
                        $nick = $_POST["nick"];
                        $telefone = $_POST["telefone"];
                        $cidade = $_POST["cidade"];
                        $data_Nascimento = $_POST["data_Nascimento"];
                        $email = $_POST["email"];
                        $senha = $_POST["senha"];

                        $conn = mysqli_connect("localhost", "root", "", "museum_db");

                        $pesquisa_Nick = mysqli_query($conn, "SELECT NICK FROM usuarios WHERE NICK = '$nick'");
                        $pesquisa_Email = mysqli_query($conn, "SELECT EMAIL FROM usuarios WHERE EMAIL = '$email'");

                        
                        if(!$conn){
                            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                        }

                        if(mysqli_num_rows($pesquisa_Nick) == 0){

                            if(mysqli_num_rows($pesquisa_Email) == 0){

                                if (mysqli_query($conn, "INSERT INTO `usuarios`(`NOME`, `NICK`, `EMAIL`, `SENHA`, `TELEFONE`, `DATA_NASCIMENTO`, `CIDADE`, `FOTO`, `TIPO_USUARIO`) VALUES ('$nome', '$nick', '$email', '$senha', '$telefone', '$data_Nascimento', '$cidade', 'adm.png', 1)")){ 

                                    echo "<script>window.location.href = 'sistema.php'</script>";
                                }else{
                                    echo "<script>document.getElementById('error-message').innerHTML = 'Cadastro falhou, tente novamente';</script>";
                                }

                            }else{
                                echo "<script>document.getElementById('error-message').innerHTML = 'Email já cadastrado, escolha outro';</script>";
                            }

                        }else{
                            echo "<script>document.getElementById('error-message').innerHTML = 'Nick já é utilizado, escolha outro';</script>";
                        }
                    }   

                ?>
            </div>
        </div>
    </div>
</body>
</html>