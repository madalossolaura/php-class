<?php
    $alunos = [
        "Nome" => "Thomaz",
        "Idade" => 19,
        "CPF" => "1234567890"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($alunos as $chave => $valor) : ?>    
        <div>
            <h1><?php echo $chave ?></h1>
            <p><?php echo $valor ?></p>
        </div>    
    <?php endforeach ?>
</body>
</html>