<!DOCTYPE html>
<html style="font-size: 16px;" class="u-responsive-xl" lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Cadastro">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cadastro | Museu Paulo Agostinho Sobrinho</title>
    <link rel="stylesheet" href="../login_files/css/estilo.css" media="screen">
    <link rel="stylesheet" href="../login_files/css/main-libs.css" media="screen">
    <link rel="stylesheet" href="../login_files/css/login.css" media="screen">
    <link rel="icon" href="../images/icons/icone.png">
    <meta name="theme_color" content="#5710b3">
    <meta property="og:title" content="Cadastro">
    <meta property="og:type" content="website">
</head>
<body class="u-body u-xl-mode" style="background: url('../images/background/ghghgh-min.jpg') no-repeat center center fixed; background-size: cover;">
    <section class="u-align-center u-clearfix u-palette-1-base u-section-2" id="sec-ff23">
        <img class="u-expanded-width u-image u-image-1" src="../images/background/b.png" data-image-width="1620" data-image-height="1080">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <span class="u-border-8 u-border-white u-file-icon u-icon u-icon-circle u-spacing-0 u-icon-1"><img src="../images/icons/icone.png" alt=""></span>
                <h2 class="u-text u-text-default u-text-palette-2-base u-text-1">Cadastre-se agora</h2>

                <div style="color: red; font-weight: bold" id="error-message"></div>

                <div class="u-form u-login-control u-form-1">
                    <form  method="POST" enctype="multipart/form-data" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="nome" class="u-label u-text-grey-30 u-label-1">Nome</label>
                            <input type="text" placeholder="Informe seu Nome" id="nome" name="nome" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-1" required>
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="nick" class="u-label u-text-grey-30 u-label-4">Nick</label>
                            <input type="text" min="5" placeholder="Informe seu Nick" id="nick" name="nick" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-4" required>
                        </div>
                        <div class="u-form-group u-form-email u-label-top">
                            <label for="email" class="u-label u-text-grey-30 u-label-2">Email</label>
                            <input type="email" placeholder="Informe seu Email" id="email" name="email" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-2" required>
                        </div>
                        <div class="u-form-group u-form-password u-label-top">
                            <label for="senha" class="u-label u-text-grey-30 u-label-3">Senha</label>
                            <input type="password" min="8" placeholder="Escolha uma senha" id="senha" name="senha" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-3" required>
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="telefone" class="u-label u-text-grey-30 u-label-5">Telefone</label>
                            <input type="text" placeholder="Informe seu Telefone" id="telefone" name="telefone" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-5" required>
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="cidade" class="u-label u-text-grey-30 u-label-6">Cidade</label>
                            <input type="text" placeholder="Informe sua Cidade" id="cidade" name="cidade" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-6" required>
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="data_Nascimento" class="u-label u-text-grey-30 u-label-7">Data de Nascimento</label>
                            <input type="date" placeholder="Informe sua Data de Nascimento" id="data_Nascimento" name="data_Nascimento" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-7" required>
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="foto" class="u-label u-text-grey-30 u-label-8">Foto</label>
                            <input type="file" id="foto" accept="image/jpeg, image/jpg, image/png" name="imagem" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-8" required>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit u-label-top">
                            <input type="submit" value="submit" class="u-form-control-hidden">
                            <button type="submit" class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-2-base u-radius-50 u-btn-1">Cadastrar</button>
                        </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                        <input type="hidden" id="siteId" name="siteId" value="1473834">
                        <input type="hidden" id="pageId" name="pageId" value="1473845">
                    </form>
                </div>
                <a href="../login.php" class="u-border-active-palette-2-base u-border-hover-palette-2-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-2-base u-btn-2">Já possui uma conta?</a>
            </div>
        </div>
        <?php
			if(isset($_POST["nome"])){
				$nome = $_POST["nome"];
				$nick = $_POST["nick"];
				$telefone = $_POST["telefone"];
				$cidade = $_POST["cidade"];
				$data_Nascimento = $_POST["data_Nascimento"];
				$foto_File = $_FILES["imagem"]["tmp_name"]; 
				$foto_Name = uniqid("img", true) . "." . pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION);
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

						if (move_uploaded_file($foto_File, "../images/usuarios/" . "$foto_Name")) { 
							
							if (mysqli_query($conn, "INSERT INTO `usuarios`(`NOME`, `NICK`, `EMAIL`, `SENHA`, `TELEFONE`, `DATA_NASCIMENTO`, `CIDADE`, `FOTO`, `TIPO_USUARIO`) VALUES ('$nome', '$nick', '$email', '$senha', '$telefone', '$data_Nascimento', '$cidade', '$foto_Name', 2)")){ 

								echo "<script>window.location.href = '../login.php'</script>";
							}else{
								echo "<script>document.getElementById('error-message').innerHTML = 'Cadastro falhou, tente novamente';</script>";
							}

						}else{
							echo "<script>document.getElementById('error-message').innerHTML = 'Erro ao fazer o upload da foto';</script>";
						}

					}else{
						echo "<script>document.getElementById('error-message').innerHTML = 'Email já cadastrado, escolha outro';</script>";
					}

				}else{
					echo "<script>document.getElementById('error-message').innerHTML = 'Nick já é utilizado, escolha outro';</script>";
				}
			}   

		?>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1bcc">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Explore a riqueza da história no nosso museu - uma viagem no tempo!</p>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="../login.php" target="_blank">
            <span>Museu Racatinga</span>
        </a>
        <p class="u-text">
            <span>criado com</span>
        </p>
        <a class="u-link" href="../Pag_SobreNos/sobre_nos.php" target="_blank">
            <span>Kaio - Otavio - Thais - Eduardo</span>
        </a>.
    </section>
</body>
</html>
