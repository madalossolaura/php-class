<?php 
    include 'includes/head.php'; 
    include 'includes/header.php';
    include 'includes/funcoes.php';
    
    // var
    $nome = $_REQUEST["nomeCompleto"];
    $cpf = $_REQUEST["cpf"];
    $cartao = $_REQUEST["nroCartao"];
    $validade = $_REQUEST["validade"];
    $cvv = $_REQUEST["cvv"];
    $nomeCurso = $_REQUEST["nomeCurso"];
    $infoCurso = $_REQUEST["precoCurso"];
    $erros = [];
    
    validarCompra($nome, $cpf, $cartao, $validade, $cvv);
?>

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

<?php include 'includes/footer.php'; ?>