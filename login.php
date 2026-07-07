<!DOCTYPE html>
<html style="font-size: 16px;" class="u-responsive-xl" lang="pt-br">
    <head>
        <title>Login | Museu Paulo Agostinho Sobrinho</title>

        <!-- <meta charset="UTF-8"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta name="keywords" content="Login Now">
        <meta name="description" content="">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <meta name="theme-color" content="#5710b3">
        <meta property="og:title" content="Home">
        <meta property="og:type" content="website"> -->

        <link rel="stylesheet" href="login_files/css/estilo.css" media="screen">
        <link rel="stylesheet" href="login_files/css/main-libs.css" media="screen">
        <link rel="stylesheet" href="login_files/css/login.css" media="screen">
        <link rel="icon" href="images/icons/icone.png">
    </head>
    <body class="u-body u-xl-mode" style="background: url('images/background/ghghgh-min.jpg') no-repeat center center fixed; background-size: cover;">

        <section class="u-align-center u-clearfix u-palette-1-base u-section-2" id="sec-ff23">

            <img class="u-expanded-width u-image u-image-1" src="images/background/b.png" data-image-width="1620" data-image-height="1080">

            <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">

                <div class="u-container-layout u-container-layout-1">

                    <span class="u-border-8 u-border-white u-file-icon u-icon u-icon-circle u-spacing-0 u-icon-1"><img src="images/icons/icone.png" alt=""></span>

                    <h2 class="u-text u-text-default u-text-palette-2-base u-text-1">Conecte-se agora</h2>

                    <div style="color: red; font-weight: bold" id="error-message"></div>

                    <div class="u-form u-login-control u-form-1">

                        <form method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;">

                            <div class="u-form-group u-form-name u-label-top">

                                <label for="nick_Email" class="u-label u-text-grey-30 u-label-1">Nick/Email</label>

                                <input type="text" placeholder="Digite seu Nick/Email" id="nick_Email" name="nick_Email" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-1" required>
                            </div>

                            <div class="u-form-group u-form-password u-label-top">

                                <label for="senha" class="u-label u-text-grey-30 u-label-2">Senha</label>

                                <input type="password" min="8" placeholder="Digite sua senha" id="senha" name="senha" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-2" required>
                            </div>

                            <div class="u-align-center u-form-group u-form-submit u-label-top">
                                <button type="submit" class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-2-base u-radius-50 u-btn-1">Conecte-se</button>
                            </div>
                            <!--<input type="hidden" value="" name="recaptchaResponse">
                            <input type="hidden" id="siteId" name="siteId" value="1473834">
                            <input type="hidden" id="pageId" name="pageId" value="1473845"> -->
                        </form>
                        <?php
                            if(isset($_POST["nick_Email"]) && isset($_POST["senha"])){
                                session_start();
                                
                                $nick_Email = $_POST["nick_Email"];
                                $senha = $_POST["senha"];

                                $conn = mysqli_connect("localhost", "root", "", "museum_db");

                                if(!$conn){
                                    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                                }

                                $resultado = mysqli_query($conn, "SELECT * FROM usuarios WHERE NICK = '$nick_Email' OR EMAIL ='$nick_Email'");

                                if(mysqli_num_rows($resultado) != 0){

                                    $row = mysqli_fetch_assoc($resultado);

                                    if($senha == $row["SENHA"]){
                                        $_SESSION['id_usuario'] = $row['ID'];
                                        $_SESSION['nome_usuario'] = $row['NOME'];
                                        $_SESSION['nick_usuario'] = $row['NICK'];
                                        $_SESSION['senha_usuario'] = $row['SENHA'];
                                        $_SESSION['email_usuario'] = $row['EMAIL'];
                                        $_SESSION['telefone_usuario'] = $row['TELEFONE'];
                                        $_SESSION['data_nascimento'] = $row['DATA_NASCIMENTO'];
                                        $_SESSION['cidade_usuario'] = $row['CIDADE'];
                                        $_SESSION['imagem_usuario'] = $row['FOTO'];
                                        $_SESSION['data_criacao'] = $row['DATA_CRIACAO'];
                                        $_SESSION['tipo_usuario'] = $row['TIPO_USUARIO'];

                                        header("Location: Pag_Main/main.php");
                                        exit;
                                    }else{
                                        echo "<script>document.getElementById('error-message').innerHTML = 'Senha incorreta, tente novamente';</script>";
                                    }

                                }else{
                                    echo "<script>document.getElementById('error-message').innerHTML = 'Nick ou Email incorretos, tente novamente';</script>";
                                }
                            }   
                        ?>
                    </div>
                    <a href="Pag_Cadastro/registrar.php" class="u-border-active-palette-2-base u-border-hover-palette-2-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-2-base u-btn-2">Não tem uma conta?</a>
                </div>
            </div>
        </section>

        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1bcc">

            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1">Explore a riqueza da história no nosso museu - uma viagem no tempo!</p>
            </div>

        </footer>

        <section class="u-backlink u-clearfix u-grey-80">
            
            <a class="u-link" href="login.php">
                <span>Museu Racatinga</span>
            </a>

            <p class="u-text">
                <span>criado com</span>
            </p>

            <a class="u-link" href="Pag_SobreNos/sobre_nos.php">
                <span>Kaio - Otavio - Thais - Eduardo.</span>
            </a>
        </section>
    </body>
</html>
