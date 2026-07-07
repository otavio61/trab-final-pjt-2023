function aumentarFonte() {
    var paragrafos = document.getElementsByTagName('p');

    for (var i = 0; i < paragrafos.length; i++) {
        var estiloAtual = window.getComputedStyle(paragrafos[i], null).fontSize;
        var tamanhoAtualRem = parseFloat(estiloAtual) / parseFloat(getComputedStyle(document.documentElement).fontSize);
        var novoTamanhoRem = tamanhoAtualRem + 0.125; 
        paragrafos[i].style.fontSize = novoTamanhoRem + 'rem';
    }
      
}

function diminuirFonte() {
    var paragrafos = document.getElementsByTagName('p');

    for (var i = 0; i < paragrafos.length; i++) {
        var estiloAtual = window.getComputedStyle(paragrafos[i], null).fontSize;
        var tamanhoAtualRem = parseFloat(estiloAtual) / parseFloat(getComputedStyle(document.documentElement).fontSize);
        var novoTamanhoRem = tamanhoAtualRem - 0.125;
        paragrafos[i].style.fontSize = novoTamanhoRem + 'rem';
    }
      
}

function autoContraste(){
    var section = document.getElementsByTagName('section');
    var h3 = document.getElementsByTagName('h3')
    var p = document.getElementsByTagName('p')

    if(section[0].style.background != "black"){
        section[0].style.background = "black"
        h3[0].style.color = "white"
        p[0].style.color = "white"

    }else{
        section[0].style.background = ""
        h3[0].style.color = "black"
        p[0].style.color = "black"
    }
}