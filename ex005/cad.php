<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>

</head>
<body>
    <div class="container2">
        <div class="container_box2">
            <header class="header2"><h1>Resultado do processamento</h1></header>
            <main class="main2">
                <?php
                    $nome = $_GET["nome"] ??"Sem Nome";
                    $sobrenome = $_GET["Snome"] ??"Desconhecido";

                    print "<p> Seu nome é $nome $sobrenome esse é o seu site.</p> ";

                ?>
                <a href="index.php">Voltar para a página.</a>
            </main>
        </div>
    </div>
</body>
</html>