<?php 
$nome = $_REQUEST["nomeCompleto"];
$cpf = $_REQUEST["cpf"];
$cartao = $_REQUEST["nroCartao"];
$validade = $_REQUEST["validade"];
$cvv = $_REQUEST["cvv"];
$nomeCurso = $_REQUEST["nomeCurso"];
$infoCurso = $_REQUEST["precoCurso"];
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
        </div>   
    </div>
</body>
</html>