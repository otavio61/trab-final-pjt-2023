<?php
  session_start();
  if(!$_SESSION["id_usuario"]){
    header("Location: ../login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>Usuário</title>
    <link rel="stylesheet" href="css/estilo.css" media="screen">
    <link rel="stylesheet" href="css/usuario.css" media="screen">
    <link rel="icon" href="../images/icons/icone.png">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/javajs.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/icone.png"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="pt">
    <header class="u-clearfix u-grey-80 u-header u-header" id="sec-9dd9">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="../Pag_Main/main.php" class="u-image u-logo u-image-1" data-image-width="291" data-image-height="291">
                <img src="../images/icons/icone.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1"
                data-responsive-from="XL">
                <div class="menu-collapse"
                    style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                    <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
                        href="#" style="padding: 8px 0px; font-size: calc(1em + 20px);">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302"
                            style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302"
                            style="enable-background:new 0 0 302 302;" xml:space="preserve"
                            class="u-svg-content">
                            <g>
                                <rect y="36" width="302" height="30"></rect>
                                <rect y="236" width="302" height="30"></rect>
                                <rect y="136" width="302" height="30"></rect>
                            </g>

                        </svg>
                    </a>
                </div>
                
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul
                                class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="../Pag_Main/main.php">Início</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="../Pag_Historia/historia.php">Museu</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="../Pag_Acervo/acervo.php">Obras</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="../Pag_SobreNos/sobre_nos.php">Sobres Nós</a></li>
                                <?php
                                    if($_SESSION["tipo_usuario"] == 0 || $_SESSION["tipo_usuario"] == 1){
                                        echo '
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="../Pag_Sistema/sistema.php">Adminstração do museu</a></li>';
                                    }
                                ?>   
                        
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                href="../logout.php">Encerrar Sessão</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-gradient u-section-1" id="sec-1f57">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="u-align-center u-border-20 u-border-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-border u-group u-radius-46 u-shape-round u-white u-group-1"
                data-animation-name="customAnimationIn" data-animation-duration="2500" data-animation-direction="">
                <div class="u-container-layout u-container-layout-1">
                    <h2
                        class="u-text u-text-custom-color-4 u-text-default u-text-1">MEUS DADOS</h2><span
                        class="u-border-8 u-border-white u-file-icon u-icon u-icon-circle u-icon-1"
                        data-animation-name="customAnimationIn" data-animation-duration="1000"><img
                            src="../images/usuarios/<?php echo $_SESSION["imagem_usuario"]?>" style="border-radius: 50%" alt=""></span>
                    <div class="u-form u-login-control u-form-1">
                        <form action="attDados.php" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"
                            source="custom" name="form" enctype="multipart/form-data" style="padding: 0px;" method="post">
                            <div class="u-form-group u-form-name u-label-top">
                                <label for="username-a30d"
                                    class="u-label u-text-grey-25 u-label-1">Nick</label>
                                <input type="text" id="username-a30d" name="novo_Nick"
                                    class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-1"
                                    required="" value="<?php echo $_SESSION['nick_usuario']; ?>">
                            </div>
                            <div class="u-form-group u-form-name u-label-top u-form-group-2">
                                <label for="name-7bc2" class="u-label u-text-grey-25 u-label-2">Nome</label>
                                <input type="text" id="name-7bc2" name="novo_Nome"
                                    class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-2"
                                    required="" value="<?php echo $_SESSION['nome_usuario']; ?>">
                            </div>
                            <div class="u-form-email u-form-group u-label-top u-form-group-3">
                                <label for="email-82f9" class="u-label u-text-grey-25 u-label-3">Email</label>
                                <input type="email" id="email-82f9" name="novo_Email"
                                    class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-3"
                                    required="" value="<?php echo $_SESSION['email_usuario']; ?>">
                            </div>

                            <div class="u-form-group u-form-name u-label-top u-form-group-2">
                                <label for="city" class="u-label u-text-grey-25 u-label-2">Cidade</label>
                                <input type="text" id="city" name="nova_Cidade"
                                    class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-2"
                                    required="" value="<?php echo $_SESSION['cidade_usuario']; ?>">
                            </div>

                            <div class="u-form-date u-form-group u-label-top u-form-group-4">
                                <label for="date-5fd7" class="u-label u-text-grey-25 u-label-4">Data de Nascimento</label>
                                <input type="date" id="date-5fd7" name="nova_Data"
                                    class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-4"
                                    required="" value="<?php echo $_SESSION['data_nascimento']; ?>">
                            </div>
                            <div class="u-form-group u-form-phone u-label-top u-form-group-5">
                                <label for="phone-d416" class="u-label u-text-grey-25 u-label-5">Telefone</label>
                                <input type="tel"
                                    id="phone-d416" name="novo_Telefone"
                                    class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-5"
                                  required="" value="<?php echo $_SESSION['telefone_usuario']; ?>">
                            </div>
                            <div class="u-form-group u-form-password u-label-top">
                                <label for="password-a30d"
                                    class="u-label u-text-grey-25 u-label-6">Senha</label>
                                <input type="text" id="password-a30d" name="nova_Senha"
                                    class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-6"
                                    required="" value="<?php echo $_SESSION['senha_usuario']; ?>">
                            </div>

                            <?php
                                if($_SESSION["tipo_usuario"] != 1 && $_SESSION["tipo_usuario"] != 0){
                                    echo '
                                    <div class="u-form-group u-form-password u-label-top">
                                        <label for="picture"
                                            class="u-label u-text-grey-25 u-label-6">Foto</label>
                                        <input type="file" id="picture" name="nova_Imagem"
                                            class="u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-6"
                                            accept="image/jpeg, image/jpg, image/png">
                                    </div>';
                                }
                            ?>

                            <div class="u-form-checkbox u-form-group u-label-top">
                                <input type="checkbox" id="checkbox-a30d" name="remember" value="On"
                                    class="u-active-palette-1-base u-field-input">
                            </div>
                            <div class="u-align-left u-form-group u-form-submit u-label-top">
                                <input type="submit" value="submit" class="u-form-control-hidden">
                                <a href="attDados.php"
                                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-4 u-radius-50 u-btn-1">Alterar
                                    Dados</a>
                            </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                    </div>
                </div>
            </div>
            <div class="u-shape u-shape-svg u-text-white u-shape-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2dd8"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-2dd8" style="enable-background:new 0 0 160 160;"><path d="M80,39.1c-22.5,0-40.9,18.3-40.9,40.9s18.3,40.9,40.9,40.9s40.9-18.3,40.9-40.9S102.5,39.1,80,39.1z M75.3,0h9.4v28.4h-9.4
	V0z M75.3,131.6h9.4V160h-9.4V131.6z M131.6,75.3H160v9.4h-28.4V75.3z M0,75.3h28.4v9.4H0V75.3z M113.1,119.8l6.6-6.6l20.1,20.1
	l-6.6,6.6L113.1,119.8z M20.1,26.7l6.6-6.6l20.1,20.1l-6.6,6.6L20.1,26.7z M20.1,133.3l20.1-20.1l6.6,6.6l-20.1,20.1L20.1,133.3z
	 M113.1,40.2l20.1-20.1l6.6,6.6l-20.1,20.1L113.1,40.2z"></path></svg>
        </div>
        <div class="u-shape u-shape-svg u-text-white u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1000">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 154 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-734c"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 154 160" x="0px" y="0px" id="svg-734c" style="enable-background:new 0 0 154 160;"><path d="M55.7,1.9C88,14.5,104.6,51.7,91.9,83.8c-12.7,32-49.2,47.8-81.5,35.3c-3.6-1.4-7.2-3.5-10.4-5.5
	c8.4,18.1,23.6,33,43.8,40.9c41.5,16.1,88.3-4.1,104.6-45.2s-4.2-87.5-45.7-103.7C87.2-0.5,70.9-1.4,55.7,1.9z"></path></svg>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9497"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Política de privacidade | © <script>document.write(new Date().getFullYear());</script>. Todos os direitos reservados.</p>
      </div></footer>
  
</body></html>