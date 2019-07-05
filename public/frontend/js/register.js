$(document).ready(function() {
    $("#partner").click(function() {
        if ($(this).is(':checked')) {
            $("#cpfCnpj").attr('placeholder', 'CNPJ').attr('title', 'Digite seu CNPJ').attr('name', 'cnpj');
            $("#name").attr('placeholder', 'Nome da Empresa').attr('title', 'Digite o Nome da Empresa');
        } else {
            $("#cpfCnpj").attr('placeholder', 'CPF').attr('title', 'Digite seu CPF').attr('name', 'cpf');
            $("#name").attr('placeholder', 'Nome Completo').attr('title', 'Digite seu Nome Completo');
        }
    });
});