function validar(){
    var nome = formphp.nome.value
    var email = formphp.email.value
    var senha = formphp.senha.value
    if (nome === ""){
        alert("digite seu nome.")
        formphp.nome.focus()
        return false
    } else if (email === ""){
        alert("digite seu e-mail.")
        formphp.email.focus()
        return false
    } else if (senha === ""){
        alert("digite sua senha.")
        formphp.senha.focus()
        return false
    } else if (senha == '123'){
        document.forms['formphp'].submit()
        return true
    } else {
        alert("senha incorreta.")
        return false
    }
}