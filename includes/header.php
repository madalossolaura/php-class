<?php 
    $usuario = [
        "Nome" => "Laura",
        "Email" => "teste@teste.com",
        "Senha" => "123456",
        "NivelAcesso" => 1
    ];
?>

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
