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
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Museu</title>
  <link rel="stylesheet" href="css/estilo.css" media="screen">
  <link rel="stylesheet" href="css/pg4.css" media="screen">
  <link rel="icon" href="../images/icons/icone.png">
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/javajs.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Sobre">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="pt">
  <header class="u-clearfix u-grey-80 u-header u-header" id="sec-9dd9">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="../Pag_Main/main.php" class="u-image u-logo u-image-1" data-image-width="291" data-image-height="291">
        <img src="images/icone.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1"
        data-responsive-from="XL">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
          <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
            href="../Pag_Main/main.php" style="padding: 8px 0px; font-size: calc(1em + 20px);">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
              id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;"
              xml:space="preserve" class="u-svg-content">
              <g>
                <rect y="36" width="302" height="30"></rect>
                <rect y="236" width="302" height="30"></rect>
                <rect y="136" width="302" height="30"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
            <li class="u-nav-item">
              <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="#" style="padding: 10px;">Início</a>
            </li>

            <li class="u-nav-item">
              <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="#" style="padding: 10px;">Museu</a>
            </li>

            <li class="u-nav-item">
              <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="#" style="padding: 10px;">Obras</a>
            </li>

            <li class="u-nav-item">
              <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="#" style="padding: 10px;">Usuário</a>
            </li>

            <li class="u-nav-item">
              <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="#" style="padding: 10px;">Sobres Nós</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="../Pag_Main/main.php" style="padding: 10px;">Início</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="../Pag_Historia/historia.php" style="padding: 10px;">Museu</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="../Pag_Acervo/acervo.php" style="padding: 10px;">Obras</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="../Pag_Usuario/usuario.php" style="padding: 10px;">Usuário</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="../Pag_SobreNos/sobre_nos.php" style="padding: 10px;">Sobres Nós</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div
            class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Pag_Main/main.php">Início</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Pag_Acervo/acervo.php">Obras</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                    href="../Pag_Usuario/usuario.php">Usuário</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Pag_SobreNos/sobre_nos.php">Sobres
                    Nós</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../logout.php">Encerrar Sessão</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-clearfix u-image u-section-1" id="carousel_47a3">

    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="javascript:aumentarFonte()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 50%; display: inline-block; ">A+</a>
      <a href="javascript:diminuirFonte()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 50%; display: inline-block; ">A-</a>
      <a href="javascript:autoContraste()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 10px; display: inline-block; ">Contraste</a>

      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-hover-feature u-layout-cell u-shape-rectangle u-size-17 u-layout-cell-1"
              data-animation-name="pulse" data-animation-duration="2000" data-animation-direction="">
              <div class="u-border-14 u-border-palette-2-base u-container-layout u-container-layout-1">

                <h3 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-1">Museu Racatinga</h3>
              </div>
            </div>
            <div class="u-align-justify u-container-style u-layout-cell u-size-43 u-layout-cell-2">

              <div class="u-container-layout u-valign-top u-container-layout-2">
                <p class="u-text u-text-default u-text-2" data-animation-name="customAnimationIn"
                  data-animation-duration="2000"> Após anos de planejamento, a cidade de Racatinga finalmente abriu um
                  museu dedicado a preservar e exibir a história da região. Localizado no centro da cidade, o museu leva
                  o nome de um antigo médico, Paulo Agostinho Sobrinho, que teve um papel fundamental no início da
                  história de Racatinga. Paulo Agostinho Sobrinho era um médico respeitado na cidade, que se dedicou não
                  apenas à sua profissão, mas também à promoção da cultura e da história local. Ele colecionava objetos
                  antigos e documentos importantes, a fim de preservar a história da cidade e transmiti-la para as
                  próximas gerações. Agora, décadas após a morte de Paulo Agostinho Sobrinho, a cidade decidiu honrar
                  sua memória dando o seu nome ao novo museu. Além disso, o museu terá uma sala especial dedicada a
                  explorar a vida e o legado do médico, destacando suas experiências, lutas e vitórias em prol da
                  cidade. O acervo do Museu Paulo Agostinho Sobrinho contém peças associadas ao contexto histórico de
                  Racatinga, incluindo artefatos indígenas, documentos antigos, fotografias e obras de arte. O objetivo
                  do museu é organizar, conservar e gerenciar essas peças, a fim de preservar a história e a cultura da
                  região para as próximas gerações. O museu também será um espaço para a promoção da cultura e da arte,
                  com exposições temporárias, palestras e workshops para a comunidade local. O Museu Paulo Agostinho
                  Sobrinho é um tesouro cultural para a cidade de Racatinga, um lugar onde a história e a arte se
                  encontram e são celebradas por todos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>



  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9497">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1"> Política de privacidade | ©
        <script>document.write(new Date().getFullYear());</script>. Todos os direitos reservados.
      </p>
    </div>
  </footer>

</body>

</html>