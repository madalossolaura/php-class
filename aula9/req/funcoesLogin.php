<?php 
    // definindo o nome do arquivo
    $nomeArquivo = "usuarios.json";

    function cadastrarUsuario($usuario) {
        // pegando a variável par dentro função
        global $nomeArquivo;
        // pegando o conteúdo do arquivo usuarios.json
        $usuariosJson = file_get_contents($nomeArquivo);
        // transformando o json em array associativo
        $arrayUsuarios = json_decode($usuariosJson, true);
        // adicionando um novo usuário para o array associativo
        array_push($arrayUsuarios["usuarios"], $usuario);
        // transformando o array associativo em json
        $usuariosJson = json_encode($arrayUsuarios);
        // colocando json de volta para o arquivo usuarios.json
        $cadastrou = file_put_contents($nomeArquivo, $usuariosJson);
        // retronando true ou false
        return $cadastrou;  
    }

    function logarUsuario($email, $senha) {
        global $nomeArquivo;
        $nomeLogado = "";
        $usuariosJson = file_get_contents($nomeArquivo);
        $arrayUsuarios = json_decode($usuariosJson, true);
        foreach($arrayUsuarios["usuarios"] as $chave => $valor) {
            if ($valor["email"] == $email && password_verify($senha, $valor["senha"])) {
                $nomeLogado = $valor["nome"];
                break;
            }
        }
        return $nomeLogado;
    }
?>