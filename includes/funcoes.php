<?php // funções 
    function validarNome($nome) {
        return strlen($nome) > 0 && strlen($nome) <= 15;
    }
    function validarCpf($cpf) {
        return strlen($cpf) == 11;
    }
    function validarNroCartao($cartao) {
        $primeiroNum = substr($cartao, 0, 1);
        return $primeiroNum == 4 || $primeiroNum == 5 || $primeiroNum ==6;
    }
    // modo fácil 
    function validarData($data) {
        $dataAtual = date("Y-m");
        return $data >= $dataAtual;
    }

    // modo enrolado 
    /*function validarData($data) {
        $today = getdate();
        $today["year"];
        $mes = substr($data, 5, 2);
        $ano = substr($data, 0, 4);
        $nmonth = date('m', strtotime($today['month']));
        return $nmonth < $mes && $today["year"] <= $ano;
    }*/

    function validarCvv($cvv) {
        return strlen($cvv) == 3;
    }

    function validarCompra($nome, $cpf, $cartao, $data, $cvv) {
        global $erros;

        if (!validarNome($nome)) {
            array_push($erros, "Preencha seu nome");
        }
        if (!validarCpf($cpf)) {
            array_push($erros, "CPF precisa ter 11 caracteres");
        }
        if (!validarNroCartao($cartao)) {
            array_push($erros, "Seu cartão precisa começar com 4, 5 ou 6");
        }
        if (!validarData($data)) {
            array_push($erros, "A data não é valida");
        }
        if (!validarCvv($cvv)) {
            array_push($erros, "CVV invalido");
        }
    }

    ?>