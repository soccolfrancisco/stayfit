$(document).ready(function() {
    $("#partner").click(function() {
        if ($(this).is(':checked')) {
            $("#cpfCnpj").attr('placeholder', 'CNPJ').attr('title', 'Digite seu CNPJ').attr('name', 'cnpj');
        } else {
            $("#cpfCnpj").attr('placeholder', 'CPF').attr('title', 'Digite seu CPF').attr('name', 'cpf');
        }
    });
});