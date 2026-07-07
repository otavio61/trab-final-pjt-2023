function ver(){
    var senha = document.getElementById("senha")
    var msg = document.getElementById("msg")

    if(senha.type == "password"){
        senha.type = "text"
        msg.innerText = "Esconder senha"
    }else{
        senha.type = "password"
        msg.innerText = "Mostrar senha"
    }
}