<?php 
    include "../conexao.php";

    if(isset($_POST["novo_Nome"])){


        $novo_Nome = $_POST["novo_Nome"];
        $novo_Nick = $_POST["novo_Nick"];
        $novo_Email = $_POST["novo_Email"];
        $nova_Cidade = $_POST["nova_Cidade"];
        $novo_Telefone = $_POST["novo_Telefone"];
        $nova_Data = $_POST["nova_Data"];
        $nova_Senha = $_POST["nova_Senha"];
        $novo_Nome = $_POST["novo_Nome"];
        $nova_Imagem = $_FILES["nova_Imagem"]["tmp_name"];

        $id = $_SESSION["id_usuario"];
        $nome_imagem = $_SESSION['imagem_usuario'];

        $pesquisa_Nick = mysqli_query($conn, "SELECT NICK FROM usuarios WHERE NICK = '$novo_Nick'");
        $pesquisa_Email = mysqli_query($conn, "SELECT EMAIL FROM usuarios WHERE EMAIL = '$novo_Email'");

        if(empty($nova_Imagem) || (!empty($nova_Imagem) && move_uploaded_file($nova_Imagem, "../images/usuarios/" . "$nome_imagem"))){
            // verificacao se o upload funciona/Caso nenhuma ou alguma imagem foi mandada

            if(mysqli_num_rows($pesquisa_Nick) == 0 || (mysqli_num_rows($pesquisa_Nick) != 0 && $_SESSION["nick_usuario"] == $novo_Nick)){
                //se caso o nick escolhido ja exista mas for do usuario logado/não exista, ele entra aqui

                if(mysqli_num_rows($pesquisa_Email) == 0 || (mysqli_num_rows($pesquisa_Email) != 0 && $_SESSION["email_usuario"] == $novo_Email)){
                    //se caso o email escolhido ja exista mas for do usuario logado/não exista, ele entra aqui

                    if(mysqli_query($conn, "UPDATE `usuarios` SET `NOME`='$novo_Nome',`NICK`='$novo_Nick',`EMAIL`='$novo_Email',`SENHA`='$nova_Senha',`TELEFONE`='$novo_Telefone',`DATA_NASCIMENTO`='$nova_Data',`CIDADE`='$nova_Cidade' WHERE `ID` = '$id';")){ 

                        ob_flush();

                        $_SESSION['nome_usuario'] = $novo_Nome;
                        $_SESSION['senha_usuario'] = $nova_Senha;
                        $_SESSION['telefone_usuario'] = $novo_Telefone;
                        $_SESSION['data_nascimento'] = $nova_Data;
                        $_SESSION['cidade_usuario'] = $nova_Cidade;
                        $_SESSION['nick_usuario'] = $novo_Nick;
                        $_SESSION['email_usuario'] = $novo_Email;

                        header("Location: usuario.php?msg=1");
                    }else{
                        header("Location: usuario.php?msg=2");
                    }

                }else{
                    //caso o email escolhido ja exista mas nao for do usuario, ele entra aqui
                    header("Location: usuario.php?msg=3");
                }

            }else{
                //caso o nick escolhido ja exista mas nao for do usuario, ele entra aqui
                header("Location: usuario.php?msg=4");
            }

        }else{
            //caso ocorra um erro no upload
            header("Location: usuario.php?msg=5");
        }
    }
?>