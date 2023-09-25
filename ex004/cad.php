<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
        //    var_dump($_REQUEST); // $_GET $_POST $_COOKIE
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo "É um prazer te conhecer <strong>$nome $sobrenome!</strong>Bem vindo ao meu site!! !!!"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior<a></p>

    </main>


</body>

</html>