window.addEventListener("DOMContentLoaded", function () {
    var submit_bt = document.getElementById("submit_bt");
    var email = document.getElementById("email");
    var senha = document.getElementById("senha");
    var nome = document.getElementById("nome");
    var cidade = document.getElementById("cidade");
    var cpf = document.getElementById("cpf");
    var cep = document.getElementById("cep");
    var rua = document.getElementById("rua");
    var numero = document.getElementById("numero");
    var bairro = document.getElementById("bairro");
    var celular = document.getElementById("celular");

submit_bt.addEventListener('click',function(e){
    if(email.value == "" || senha.value == "" || nome.value == "" || cidade.value == ""
    || cpf.value == "" || cep.value == "" || rua.value == "" || numero.value == ""
    || bairro.value == "" || celular.value == "")
    {
        e.preventDefault();
        Swal.fire(
            'Erro :(',
            'Por favor, preencha todos os campos',
            'error'
          );
    }
    else
    {
        console.log("ok")
    }
},false)
});
