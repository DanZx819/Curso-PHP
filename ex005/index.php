<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtendo dados de formulario HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <form action="cad.php" method="get">
            <h2>Apresente-se</h2>
            <label for="Nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="Sobrenome">Sobrenome:</label>
            <input type="text" name="Snome" id="Snome">

            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>