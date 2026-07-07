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
    var p = document.getElementById('pExplorar')
    var h2 = document.getElementById('h2Explorar')
    var div = document.getElementById('divObras')

    if(section[0].style.background != "black"){
        for(var i = 0; i < section.length; i++)
        section[i].style.background = "black"
        

        p.style.color = "white"
        h2.style.color = "white"
        div.style.background = "black"
    }else{
        for(var i = 0; i < section.length; i++)
        section[i].style.background = ""

        p.style.color = "black"
        h2.style.color = "black"
        div.style.background = ""
    }
}