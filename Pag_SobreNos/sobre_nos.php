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
  <meta name="keywords" content="​Teaching and Learning Center, Education and Learning, 01, 02, 03, 04, Meet The Team, ​Start working smarter, ​Your space
to learn, connect,
and be inspired, Educational programs">
  <meta name="description" content="">
  <title>Sobre Nós</title>
  <link rel="stylesheet" href="css/estilo.css" media="screen">
  <link rel="stylesheet" href="css/pg3.css" media="screen">
  <link rel="icon" href="../images/icons/icone.png">
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/javajs.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">



  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/icone.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Página 3">
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
            href="#" style="padding: 8px 0px; font-size: calc(1em + 20px);">
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
                href="#" style="padding: 10px;">Sobres Nós</a>
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
                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                    href="../Pag_Historia/historia.php">Museu</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Pag_Acervo/acervo.php">Obras</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                    href="../Pag_Usuario/usuario.php">Usuário</a>
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
  <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_13e4">
    <a href="javascript:aumentarFonte()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 50%; display: inline-block; ">A+</a>
    <a href="javascript:diminuirFonte()"style="color: white; background-color: grey; padding: 7px 12px; border-radius: 50%; display: inline-block; ">A-</a>
    <a href="javascript:autoContraste()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 10px; display: inline-block; ">Contraste</a>
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-hover-feature u-text u-text-default u-text-white u-text-1" data-animation-name="customAnimationIn"
        data-animation-duration="1500" data-animation-delay="250">GRUPO - WINX&nbsp;</h2>
      <p class="u-text u-text-white u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500"
        data-animation-delay="250">Projeto de <span style="text-decoration: underline !important;">PJT</span>
      </p>
      <div class="u-expanded-width u-list u-list-1">
        
        <div class="u-repeater u-repeater-1">
          <div
            class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1"
            data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1599" data-image-height="1599">
              </div>
              <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                <div class="u-container-layout">
                  <p class="u-align-left u-text u-text-grey-30 u-text-3">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp;</p>
                  <h3 class="u-align-left u-text u-text-palette-1-base u-text-4"> Kaio Vinicius da Silva</h3>
                  <p class="u-align-left u-text u-text-body-color u-text-5">Oi, sou o Kaio, 18 anos. Estilizei o site
                    com CSS, HTML e JS, trazendo criatividade ao design. Contribuí com ideias inovadoras para uma
                    experiência visual única.</p>
                  <div class="u-social-icons u-spacing-30 u-social-icons-1">
                    <a class="u-social-url" title="instagram" target="_blank"
                      href="https://instagram.com/kaio.viniciusk?igshid=OGQ5ZDc2ODk2ZA=="><span
                        class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-1"><img
                          src="images/1409946.png" alt=""></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2"
            data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <div alt="" class="u-image u-image-circle u-image-2" data-image-width="598" data-image-height="598"></div>
              <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-2">
                <div class="u-container-layout">
                  <p class="u-align-left u-text u-text-default u-text-grey-30 u-text-6">&nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                  <h3
                    class="u-align-left u-custom-font u-font-raleway u-text u-text-default u-text-palette-1-base u-text-7">
                    Otavio de Moraes</h3>
                  <p class="u-align-left u-text u-text-body-color u-text-8"> Oi, sou o Otavio, tenho 17 anos. Fui
                    responsável pelo back-end da página, utilizando HTML, PHP e JS. Atuei no desenvolvimento do login,
                    cadastro e dados do usuário e do acervo.</p>
                  <div class="u-social-icons u-spacing-30 u-social-icons-2">
                    <a class="u-social-url" title="https://instagram.com/otaviomoraes06?igshid=OGQ5ZDc2ODk2ZA=="
                      target="_blank" href="https://instagram.com/name"><span
                        class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-2"><img
                          src="images/1409946.png" alt=""></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3"
            data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <div alt="" class="u-image u-image-circle u-image-3" data-image-width="206" data-image-height="206"></div>
              <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-3">
                <div class="u-container-layout">
                  <p class="u-align-left u-text u-text-default u-text-grey-30 u-text-9">&nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp;</p>
                  <h3
                    class="u-align-left u-custom-font u-font-raleway u-text u-text-default u-text-palette-1-base u-text-10">
                    Eduardo Augusto&nbsp;</h3>
                  <p class="u-align-left u-text u-text-body-color u-text-11"> Me chamo Eduardo, tenho 17 anos, e
                    contribuí para o desenvolvimento do site, focando especialmente na parte estética e na implementação
                    de animações utilizando CSS e JavaScript. </p>
                  <div class="u-social-icons u-spacing-30 u-social-icons-3">
                    <a class="u-social-url" title="instagram" target="_blank"
                      href="https://instagram.com/duh.albertasi?igshid=OGQ5ZDc2ODk2ZA=="><span
                        class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-3"><img
                          src="images/1409946.png" alt=""></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4"
            data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-container-layout-7">
              <div alt="" class="u-image u-image-circle u-image-4" data-image-width="450" data-image-height="520"></div>
              <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-4">
                <div class="u-container-layout">
                  <p class="u-align-left u-text u-text-default u-text-grey-30 u-text-12">&nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp;&nbsp;</p>
                  <h3
                    class="u-align-left u-custom-font u-font-raleway u-text u-text-default u-text-palette-1-base u-text-13">
                    Thais Santos de Souza</h3>
                  <p class="u-align-left u-text u-text-body-color u-text-14"> Meu nome é Thais, tenho 17 anos, e minha
                    colaboração no projeto do site focou na criação e curadoria de conteúdo. trabalhei na pesquisa e
                    elaboração de textos informativos e imagens que enriqueceram o acervo, logo e etc do site. </p>
                  <div class="u-social-icons u-spacing-30 u-social-icons-4">
                    <a class="u-social-url" title="instagram" target="_blank"
                      href="https://instagram.com/thaissantos9962?igshid=OGQ5ZDc2ODk2ZA=="><span
                        class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-4"><img
                          src="images/1409946.png" alt=""></span>
                    </a>
                  </div>
                </div>
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