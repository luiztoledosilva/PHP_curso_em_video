<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
<main>
 <?php 
//    var_dump($_REQUEST); // $_GET $_POST $_COOKIE
 $n = $_GET["nome"];
 $s = $_GET["sobrenome"];
 echo "É um prazer te conhecer $n $s !!!"
 ?>


</main>


</body>

</html>