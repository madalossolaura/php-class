<?php 
    // var
    $nome = $_REQUEST["nomeCompleto"];
    $cpf = $_REQUEST["cpf"];
    $cartao = $_REQUEST["nroCartao"];
    $validade = $_REQUEST["validade"];
    $cvv = $_REQUEST["cvv"];
    $nomeCurso = $_REQUEST["nomeCurso"];
    $infoCurso = $_REQUEST["precoCurso"];
    $erros = [];

    // funções 
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

    validarCompra($nome, $cpf, $cartao, $data, $cvv)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Sucesso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <?php if (count($erros) > 0) :?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3>Preencha seus dados corretamente</h3>
                    </div>
                
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($erros as $chave => $valorErro) : ?>
                                <li class="list-group-item">
                                    <?= $valorErro?>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <div class="center">
                            <a href="index.php">
                                <span>Voltar para a página inicial >></span>
                            </a>
                        </div>
                    </div>    
                
                </div>
            <?php else : ?>    
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Compra Realizado com Sucesso!</h3>
                    </div>
                
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Nome Curso: <?php echo $nomeCurso ?></strong></li>
                            <li class="list-group-item"><strong>Preço: R$ <?php echo $infoCurso ?></strong></li>
                            <li class="list-group-item"><strong>Nome Completo: <?php echo $nome ?></strong></li>
                        </ul>
                        <div class="center">
                            <a href="index.php">
                                <span>Voltar para a página inicial >></span>
                            </a>
                        </div>
                    </div>    
                
                </div>
            <?php endif; ?>    
        </div>   
    </div>
</body>
</html>