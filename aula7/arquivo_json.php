<?php 
    $nomeArquivo = "usuario.json";

    $arrayAssoc = [
        "nome" => "Laura",
        "email" => "email@email.com",
        "senha" => "123456"
    ];

    $json = json_encode($arrayAssoc);

    file_put_contents($nomeArquivo, $json);
    
    echo $json;
    echo "<br>";

   // $arrayNovaAssoc = json_decode($json, true);
   // var_dump($arrayNovaAssoc);
?>