<?php 
    require "req/funcoesLogin.php";
    include "inc/head.php";

    if ($_REQUEST) {
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];

        $estaLogado = logarUsuario($email, $senha);

        if ($estaLogado == true) {
            //redireciona o user para a pagina que falamos no location
            header("Location: index.php");
        } else {
            $erro  = "Seu usuário não foi encontrado!";    
        }
    }
?>
    <div class="page-center">
        <h2>Login</h2>
        <?php if (isset($erro)) : ?>
            <div class="alert alert-danger">
                <span><?php echo $erro ?></span>
            </div>
        <?php endif; ?>
        <form action="login.php" method="post" class="col-md-7">
            <div class="col-md-12">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-12">
                <label for="inputSenha">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputSenha">
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Entrar</button>
                <a href="cadastro.php" class="col-md-offset-9">Fazer Cadastro!</a>
            </div>
        </form>
    </div>
<?php 
    include "inc/foote.php";
?>