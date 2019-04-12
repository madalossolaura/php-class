<?php 
    $nomeArquivo = "texto.txt";

    if (!file_exists($nomeArquivo)) {
        //abrindo arquivo criado
        $arquivo = fopen ($nomeArquivo, "w+");
        //escrevendo arquivo
        for ($i = 1; $i <= 100; $i++) {
            fwrite($arquivo, $i . " - Eai esse é o arquivo aberto" . PHP_EOL);
        }
        //fechando
        fclose($arquivo);
    } else {
        $arquivo = fopen($nomeArquivo, "r");
        $tamanho = filesize($nomeArquivo);
        $conteudo = fread($arquivo, $tamanho);

        echo $conteudo;
    }
?>