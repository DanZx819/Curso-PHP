<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtendo dados de formulario HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section class="container1">

        <div class="container_box">
            <h2>Apresente-se</h2>
            <form action="cad.php" method="get" >
                <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">
                <input type="text" name="Snome" id="Snome" placeholder="Digite o seu sobrenome">
                <input type="submit" value="Enviar" name="Enviar">
            </form>
        </div>
    </section>
</body>
</html>