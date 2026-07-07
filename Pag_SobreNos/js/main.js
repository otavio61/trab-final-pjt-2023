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

    if(section[0].style.background != "black"){
        section[0].style.background = "black"

    }else{
        section[0].style.background = ""
    }
}