<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com formularios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="cad.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome">
            <input type="submit" value="enviar">
        </form>
    </section>
</body>

</html>