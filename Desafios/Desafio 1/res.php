<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <section class="container2">
        <div class="container-box2">
            <?php 
                $num = $_GET["n1"] ?? "Sem número";

                $su = $num + 1;
                $ant = $num - 1;
                print"<h1>Resultado</h1>
            <p>Seu número: $num</p>
            <p>Antecessor: $ant</p>
            <p>Sucessor: $su</p>"
            ?>
            <a href="index.php">Voltar para a página</a>
        </div>
    </section>
</body>
</html>