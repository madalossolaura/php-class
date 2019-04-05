<?php   
  $cursos = [
        "Full Stack" => ["Curso de desenvolvimento web", 1000.99, "full.jpeg", "fullstack"],
        "Marketing" => ["Curso de desenvolvimento de campanhas", 1000.98, "marketing.jpg", "marketing"],
        "UX" => ["Curso de User Experience", 9000.98, "ux.jpeg", "ux"],
        "Mobile Android" => ["Curso de apps", 1000, "android.png", "android"]
  ];  

  $usuario = [
        "Nome" => "Laura",
        "Email" => "teste@teste.com",
        "Senha" => "123456",
        "NivelAcesso" => 1
  ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Cursos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   
   
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <span>Cursos</span>
            </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if ($usuario["NivelAcesso"] == 1) : ?>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="drop;down-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Edita tudo</a></li>
                            <li><a href="#">e aqui é o chefão</a></li>
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>        
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquise aqui">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
            <p class="navbar-text navbar-right">
                Logado como 
                <strong>
                    <a href="#" class="navbar-link"><?php echo $usuario["Nome"]; ?></a>
                </strong>
            </p>
            </div>
        </div>
    </nav>

   <div class="container">
    <!-- começo do card de cursos -->
        <div class="row">
            <?php foreach ($cursos as $nomeCurso => $infoCurso) : ?>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                    <img src="<?php echo "assets/img/$infoCurso[2]"; ?>" alt="<?php echo "Foto curso $infoCurso[2]" ?>">
                    <div class="caption">
                        <h3><?php echo $nomeCurso; ?></h3>
                        <p><?php echo $infoCurso[0]; ?></p>
                        <p>R$<?php echo $infoCurso[1]; ?></p>
                        <a href="#" class="btn btn-info" role="button" data-toggle="modal" data-target="#<?php echo $infoCurso[3] ?>">Comprar</a>
                    </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <?php foreach ($cursos as $nomeCurso => $infoCurso) : ?>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $infoCurso[3] ?>" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Preencha os seus dados</h4>
                </div>
                <div class="modal-body">
                    <h4>Curso de <strong><?php echo $nomeCurso ?></strong></h4>
                    <h4>Preço do <strong>R$<?php echo $infoCurso[1] ?></strong></h4>
                  <form action="validaComprar.php" method="post">
                      <input type="hidden" name="nomeCurso" value="<?php echo $nomeCurso ?>">
                      <input type="hidden" name="precoCurso" value="<?php echo $infoCurso[1] ?>">
                        <div class="input-group col-md-5">
                            <label for="nomeCompleto">Nome Completo</label>
                            <input id="nomeCompleto" name="nomeCompleto" class="form-control" type="text">
                        </div>    
                        <div class="input-group col-md-5">
                            <label for="cpf">CPF</label>
                            <input id="cpf" name="cpf" class="form-control" type="number">
                        </div> 
                        <div class="input-group col-md-5">
                            <label for="nroCartao">Numero do Cartão</label>
                            <input id="nroCartao"  name="nroCartao" class="form-control" type="number">
                        </div> 
                        <div class="input-group col-md-5">
                            <label for="validade">Validade</label>
                            <input id="validade" name="validade" class="form-control" type="month">
                        </div> 
                        <div class="input-group col-md-5">
                            <label for="cvv">CVV</label>
                            <input id="cvv" name="cvv" class="form-control" type="number">
                        </div> 
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>