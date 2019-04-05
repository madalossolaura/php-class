<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="validar.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <button type="submit">Enviar</button>
    </form>
    
    <form action="validar.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>