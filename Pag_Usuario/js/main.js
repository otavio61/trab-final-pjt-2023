function ver(){
    var itens = document.querySelectorAll(".attDados")
    var btt = document.getElementById("botao")

    if(itens[1].style.display == "none"){
        btt.innerText = "Esconder"
        for(var i = 0; itens.length; i++){
            itens[i].style.display = "table-cell"
        }
    
    }else{
        btt.innerText = "Alterar Dados"
        for(var i = 0; itens.length; i++){
            itens[i].style.display = "none"
        }
    }
}
