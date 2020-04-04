function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}


//valida formulario e manda para salvar ou atualizar
$('#formAdicionar, #formEditar').submit(function() {


    var nome = $('#Nome').val();
    var NomeMae = $('#NomeMae').val();
    var cpf = $('#cpf').val();
    var dtnascimento = $('#dtnascimento').val();
    var Rua = $('#Rua').val();
    var Numero = $('#Numero').val();
    var Bairro = $('#Bairro').val();
    var Cidade = $('#Cidade').val();
    var Estado = $('#Estado').val();
    var cep = $('#cep').val();

    if (nome == "" || NomeMae == "" || cpf == "" || dtnascimento == "" || Rua == "" || Numero == "" || Bairro == "" || Cidade == "" || Estado == "" || cep == "") {
        alert("Preencha os campos obrigatórios.");
        return false;
    } else {
        return true;
    }

});