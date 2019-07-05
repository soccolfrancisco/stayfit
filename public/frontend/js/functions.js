/**
 * Verificar CPF
 */
$(document).ready(function() {
    //Quando o campo cpf perde o foco.
    $("#cpf").blur(function() {
        var cpf = $(this).val();
        if(cpf.length != 11 || cpf.replace(eval('/'+cpf.charAt(1)+'/g'),'') == '')
        {
            document.getElementById("cpf").style.border = "1px solid #ED8403";
        }
        else
        {
            for(n=9; n<11; n++)
            {
                for(d=0, c=0; c<n; c++) d += cpf.charAt(c) * ((n + 1) - c);
                d = ((10 * d) % 11) % 10;
                if(cpf.charAt(c) != d){
                    document.getElementById("cpf").style.border = "1px solid #A62300";
                }
            }
            document.getElementById("cpf").style.border = "1px solid #02A654";
        }
    });
});

/**
 * Verificar CNPJ
 */
$(document).ready(function() {
    $("#cnpj").blur(function() {
        var cnpj = $(this).val();
        cnpj = cnpj.replace(/[^\d]+/g,'');
        if(cnpj == '')
        {
            document.getElementById("cnpj").style.border = "1px solid #ED8403";
        }
        else if (cnpj.length != 14)
        {
            document.getElementById("cnpj").style.border = "1px solid #A62300";
        }
        // Elimina CNPJs invalidos conhecidos
        else if ( cnpj == "00000000000000" ||
            cnpj == "11111111111111" ||
            cnpj == "22222222222222" ||
            cnpj == "33333333333333" ||
            cnpj == "44444444444444" ||
            cnpj == "55555555555555" ||
            cnpj == "66666666666666" ||
            cnpj == "77777777777777" ||
            cnpj == "88888888888888" ||
            cnpj == "99999999999999")
        {
            document.getElementById("cnpj").style.border = "1px solid #A62300";
        }
        else
        {
            // Valida DVs
            tamanho = cnpj.length - 2
            numeros = cnpj.substring(0,tamanho);
            digitos = cnpj.substring(tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (i = tamanho; i >= 1; i--)
            {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2)
                    pos = 9;
            }
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0))
            {
                // Errado
                document.getElementById("cnpj").style.border = "1px solid #A62300";
            }
            else
            {
                tamanho = tamanho + 1;
                numeros = cnpj.substring(0,tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--)
                {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2)
                        pos = 9;
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(1))
                {
                    // Errado
                    document.getElementById("cnpj").style.border = "1px solid #A62300";
                }
                else
                {
                    // Certo
                    document.getElementById("cnpj").style.border = "1px solid #02A654";
                }
            }
        }
    });
});

/**
 * Verificar CEP
 */
$(document).ready(function() {
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#street").val("");
        $("#district").val("");
        $("#city").val("");
        $("#state").val("");
    }
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {
        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;
            //Valida o formato do CEP.
            if(validacep.test(cep)) {
                //Preenche os campos com "Carregando..." enquanto consulta webservice.
                $("#street").val("Carregando...");
                $("#district").val("Carregando...");
                $("#city").val("Carregando...");
                $("#state").val("Carregando...");
                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                    if (!("erro" in dados)) {
                        document.getElementById("cep").style.border = "1px solid #02A654";
                        //Atualiza os campos com os valores da consulta.
                        $("#street").val(dados.logradouro);
                        $("#district").val(dados.bairro);
                        $("#city").val(dados.localidade);
                        $("#state").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        document.getElementById("cep").style.border = "1px solid #ED8403";
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                document.getElementById("cep").style.border = "1px solid #A62300";
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
            document.getElementById("cep").style.border = "1px solid #ED8403";
        }
    });
});