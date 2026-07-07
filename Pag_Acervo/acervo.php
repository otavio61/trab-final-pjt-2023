<?php
  include "../conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br" style="font-size: 16px" class="u-responsive-xl" lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acervo | Museu Paulo Agostinho Sobrinho</title>

    <link rel="stylesheet" href="acervo_files/nicepage.css">
    <link rel="stylesheet" href="acervo_files/estilo.css">
    <link rel="stylesheet" href="acervo_files/main.css">
    <link rel="icon" href="../images/icons/icone.png">
    <link id="u-theme-google-font" rel="stylesheet" href="./acervo_files/css">
    <link id="u-page-google-font" rel="stylesheet" href="./acervo_files/css(1)">
    <link rel="shortcut icon" href="../images/icons/favicon.png" type="image/x-icon">

    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/javajs.js"></script>

    <style>
      .u-section-2 {
        background-image: linear-gradient(#a98d62, #725e3f);
      }

      .u-section-2 .u-sheet-1 {
        min-height: 1015px;
      }

      .u-section-2 .u-text-1 {
        font-size: 3.75rem;
        font-weight: 300;
        margin: 0;
      }

      .u-section-2 .u-btn-2 {
        border-style: none;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-weight: 300;
        font-size: 0.875rem;
        margin: 30px auto 0 0;
        padding: 15px 30px;
      }
    </style>
  </head>

  <body class="u-body">
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
                                        href="../Pag_Usuario/usuario.php">Usuário</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="../Pag_SobreNos/sobre_nos.php">Sobres Nós</a></li>  
                        
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                    href="../logout.php">Encerrar Sessão</a>
                                </li>
                              </ul>
                          </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-palette-1-base u-section-2" id="sec-6f04">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">

        <span>
          <h1 id="ta" style="font-weight: 700; font-family: Roboto,sans-serif !important;letter-spacing: 2px; text-align: center;" class="u-custom-font u-font-titillium-web u-text u-text-1">Itens do Acervo</h1>
          
          <a href="javascript:aumentarFonte()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 50%; display: inline-block; ">A+</a>
          <a href="javascript:diminuirFonte()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 50%; display: inline-block; ">A-</a>
          <a href="javascript:autoContraste()" style="color: white; background-color: grey; padding: 7px 12px; border-radius: 10px; display: inline-block; ">Contraste</a>
        </span>

        <?php
          $busca = mysqli_query($conn, "SELECT * FROM `acervo`");
          $i = 1;

          echo "<table class='container'>";
          while($linha = mysqli_fetch_array($busca)){
            $id = $linha["ID"];

            $comentario = mysqli_query($conn, "SELECT * FROM `comentarios` WHERE `ID_ACERVO` = '$id' ");

            echo "
            <tr>
            <td>
            <div class='block'>
            <img class='imgA' height='300'; width='300' src='../images/acervo/" . $linha['FOTO'] . "'>
            <h2>" . $linha['NOME'] . "</h2>
            <p>" . $linha['DESCRICAO'] . "</p>";

            if(mysqli_num_rows($comentario) != 0){
              while($coment = mysqli_fetch_array($comentario)){
                echo "
                <fieldset>
                <legend>
                <span class='coment'>" . $coment["NOME_USUARIO"] . "<img class='imgU' src='../images/usuarios/" . $coment["FOTO_USUARIO"] . "' style='border-radius: 50%;' width='50' height='50'>
                </span>
                </legend>
                <form method='post' action='editarComentario.php'>
                <textarea cols='30' rows='5' maxlength='500' style='resize: none' name='c_" . $coment["ID"] . "' class='coment_user' id='comentario_$i' disabled>" . $coment["COMENTARIO"] . "</textarea>";
                if($coment["ID_USUARIO"] == $_SESSION["id_usuario"]){
                  echo "
                  <input id='edit_$i' type='button' onclick='edit($i)' value='Editar'>
                  <input style='display: none' class='editar_$i' type='submit' value='Enviar'>
                  <input type='hidden' name='hiddenId' value='{$_SESSION["id_usuario"]}'>
                  <a style='display: none; color: red;border-radius: 10px;padding: 8px 12px;' class='editar_" . $i . "' type='button' href='apagarComentario.php?id_coment=" . $coment["ID"] . "' >Excluir</a>";
                }else if(($_SESSION["tipo_usuario"] == 1 || $_SESSION["tipo_usuario"] == 0) && $coment["ID_USUARIO"] != 1){
                  echo "
                  <input id='edit_$i' type='button' onclick='edit($i)' value='Editar'>
                  <a style='display: none; color: red;border-radius: 10px;padding: 8px 12px;' class='editar_" . $i . "' type='button' href='apagarComentario.php?id_coment=" . $coment["ID"] . "' >Excluir</a>";
                }
                echo "  
                </form>
                </fieldset>";
                $i++;
              }
            }
                  
            echo "
            <form method='post' action='addComentario.php'>
            comentario: <textarea type='text' name='coment_$id' required></textarea>
            <input type='submit' value='enviar'>
            </form>
            </div>
            </td>
            </tr>";
          }
          echo "</table>";
        ?>
      </div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-db83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Política de privacidade | © <script>document.write(new Date().getFullYear());</script>. Todos os direitos reservados.</p>
      </div>
    </footer>
  </body>
</html>