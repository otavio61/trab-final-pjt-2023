<?php
  session_start();
  if(!$_SESSION["id_usuario"]){
    header("Location: ../login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-br"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Book your outdoor adventure, About Us, ​Find your next getaway, Our Services, ​Plan Your Camping Trip, ​How to plan a camping trip, Contact Us">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="css/estilo.css" media="screen">
    <link rel="stylesheet" href="css/pg2.css" media="screen">
    <link rel="icon" href="../images/icons/icone.png">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/javajs.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="pt">
    <section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-image u-shading u-section-1" src="images/main/river-flowing-through-forest-generative-al2-min.jpg" id="sec-804d" data-image-width="1980" data-image-height="1131">
      
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">Museu Racatinga - Projeto Web</h1>
        <p class="u-align-center-md u-align-center-sm u-align-center-xs u-large-text u-text u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> O projeto que apresentamos aqui é fruto do esforço conjunto de Kaio, Otávio, Thais e Eduardo, um grupo dedicado da turma B da disciplina de PJT. Nosso objetivo é criar um site dedicado a um museu fictício</p>
        <div class="data-layout-selected u-clearfix u-expanded-width-xs u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <!-- <div class="u-align-right u-container-align-center-xs u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <a href="main.php#carousel_eee5" class="u-align-center-xs u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-1">Explorar</a>
                
                </div>
                
              </div> -->
              <div class="u-align-left u-container-align-center-xs u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <a href="main.php#carousel_eee5" class="u-align-center-xs u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-1">Explorar</a>
                </div>
              
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <a href="main.php#sec-c25f" class="u-align-center-xs u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-1">Obras famosas</a>
                </div>
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <a href="javascript:aumentarFonte();" class="u-active-white u-align-center-xs u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-hover-black u-btn-2">A+</a>
                </div>
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <a href="javascript:diminuirFonte();" class="u-active-white u-align-center-xs u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-hover-black u-btn-2">A-</a>
                </div>
                <div class="u-container-layout u-valign-top u-container-layout-2">
                <a href="javascript:autoContraste()" class="u-active-white u-align-center-xs u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-hover-black u-btn-2">Contraste</a>

                </div> 
              </div>
            </div>
          </div>
        </div>

        <a href="../Pag_SobreNos/sobre_nos.php"><div class="u-container-style u-group u-hover-feature u-palette-2-base u-preserve-proportions u-radius-50 u-shape-round u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-href="../Pag_SobreNos/sobre_nos.php">
            <div class="u-container-layout u-container-layout-3"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="../images/main/149447-7ea994e9.png" alt=""></span></a>
              <h3 class="u-text u-text-3">Sobre Nós</h3>
            </div>
          </div>
          
        <a href ="../Pag_Historia/historia.php"><div class="u-container-style u-group u-hover-feature u-palette-2-base u-preserve-proportions u-radius-50 u-shape-round u-group-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-href="../Pag_Historia/historia.php">
          <div class="u-container-layout u-container-layout-4"><span class="u-file-icon u-icon u-text-white u-icon-2"><img src="../images/main/1862600-29a61bb2.png" alt=""></span></a>
            <h3 class="u-text u-text-4">Museu</h3>
          </div>
        </div>

        <a href ="../Pag_Acervo/acervo.php"><div class="u-container-style u-group u-hover-feature u-palette-2-base u-preserve-proportions u-radius-50 u-shape-round u-group-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-href="../Pag_Acervo/acervo.php">
          <div class="u-container-layout u-valign-bottom u-container-layout-5"><span class="u-file-icon u-icon u-text-white u-icon-3"><img src="../images/main/3199931-365dd064.png" alt=""></span></a>
            <h3 class="u-text u-text-5">Obras</h3>
          </div>
        </div>
        <a href ="../Pag_Usuario/usuario.php"><div class="u-container-style u-group u-hover-feature u-palette-2-base u-preserve-proportions u-radius-50 u-shape-round u-group-4" data-animation-name="customAnimationIn" data-animation-duration="1000" data-href="../Pag_Usuario/usuario.php">
          <div class="u-container-layout u-valign-bottom u-container-layout-6"><span class="u-file-icon u-icon u-text-white u-icon-4"><img src="../images/main/149295-4e90bb7c.png" alt=""></span></a>
            <h3 class="u-text u-text-6">Usuário</h3>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-container-align-center u-section-2" id="carousel_eee5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-align-center u-container-style u-hover-feature u-layout-cell u-left-cell u-shape-rectangle u-size-23-lg u-size-23-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <div alt="" class="u-border-10 u-border-palette-2-base u-image u-image-circle u-image-1" src="" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="1280" data-image-height="853"></div>
                </div>
              </div>
              <div class="u-align-left u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-layout-cell u-right-cell u-size-37-lg u-size-37-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 id="h2Explorar" class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">O que há no museu:</h2>
                  <p id="pExplorar" class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-2"> Seja você um amante da história, um entusiasta da arte ou simplesmente alguém em busca de conhecimento, o Museu Racatinga é o lugar perfeito para explorar o passado e apreciar a beleza da criação humana. Neste site, convidamos você a embarcar em uma jornada única através de séculos de história e cultura</p>
                  <a href="../Pag_Historia/historia.php" class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-1">História do museu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-3" id="sec-c25f">
      <div id="divObras" class="u-container-style u-expanded-width u-group u-image u-shading u-image-1" src="images/main/b40d4dc41a0458f2a1a748a954be10dd966a7223180d2e3deff91a0ffa837ce7528403ef231f40800890c1a3f94c7831226801a68be842bd9706f3_1280.jpg" data-image-width="1280" data-image-height="1032">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <h2 class="u-align-center u-text u-text-default u-text-1">Obras Famosas</h2>
        </div>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <img class="u-expanded-width u-image u-image-default u-image-2" src="../images/main/O Grito.jpg" alt="" data-image-width="1280" data-image-height="1032">
              <h4 class="u-hover-feature u-text u-text-2">O Grito</h4>
              <p class="u-hover-feature u-text u-text-3">O Grito se transformou num ícone cultural ao longo dos anos</p>
              <a href="../Pag_Acervo/acervo.php" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Mais</a>
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <img class="u-expanded-width u-image u-image-default u-image-3" src="../images/main/Os Girassóis.jpg " alt="" data-image-width="1280" data-image-height="1032">
              <h4 class="u-hover-feature u-text u-text-4"> Os Girassóis </h4>
              <p class="u-hover-feature u-text u-text-5"> São uma série de pinturas icônicas que transmitem a paixão e a visão de mundo do artista. </p>
              <a href="../Pag_Acervo/acervo.php" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-2">Mais</a>
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <img class="u-expanded-width u-image u-image-default u-image-4" src="../images/main/A Noite Estrelada.jpg" alt="" data-image-width="1280" data-image-height="1032">
              <h4 class="u-hover-feature u-text u-text-6"> A Noite Estrelada</h4>
              <p class="u-hover-feature u-text u-text-7"> É uma das poucas que foi pintada sem a existência de uma paisagem real como modelo</p>
              <a href="../Pag_Acervo/acervo.php" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3">Mais</a>
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <img class="u-expanded-width u-image u-image-default u-image-5" src="../images/main/O Pensador (1880).jpg" alt="" data-image-width="1280" data-image-height="1032">
              <h4 class="u-hover-feature u-text u-text-8"> O Pensador</h4>
              <p class="u-hover-feature u-text u-text-9">um símbolo duradouro da busca pelo conhecimento</p>
              <a href="../Pag_Acervo/acervo.php" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-4">Mais</a>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9497"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Política de privacidade | © <script>document.write(new Date().getFullYear());</script>. Todos os direitos reservados.</p>
      </div></footer>
  
</body></html>