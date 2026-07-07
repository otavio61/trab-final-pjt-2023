function ver(){
    btt = document.getElementById("bAdm")

    td = document.querySelectorAll(".td")
    
    if(td[1].style.display == "none"){
        for(var i = 0; i < td.length; i++){
            td[i].style.display = "inline"
        }

    }else{
        for(var i = 0; i < td.length; i++){
            td[i].style.display = "none"
        }
    }
}

function edit(num){
    var comentarios = document.getElementsByClassName("coment_user")

    for(var i = 1; i <= comentarios.length; i++){
        if(i == num){
            var c = document.getElementById(`comentario_${num}`)
            var btt = document.getElementById(`edit_${num}`)
            var form = document.querySelectorAll(`.editar_${num}`)

            if(c.disabled == true){
                c.disabled = false
                btt.value = "Cancelar"
                form[0].style.display = "inline-block"
                form[1].style.display = "inline-block"
            }else{
                c.disabled = true
                btt.value = "Editar"
                form[0].style.display = "none"
                form[1].style.display = "none"
            }
        }
    }
}

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