<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Randomizador de números</title>
</head>
<body>
    <section class="container1">
        <div class="container-box">
            <h1>Randomizador de números</h1>
            <p>Ao clicar no botão abaixo será escolhido um número de 0 a 100.</p>
            <form method="get" class="form-box">
                <button type="submit" name="btn">Gerar</button>
                <button type="submit" name="rmv">Apagar</button>
            </form>

            <?php 
                if (isset($_GET["btn"])) {
                    $rand = rand(0, 100);
                    print "<p>Seu número foi $rand</p>";
                }
            ?>

        </div>
    </section>
</body>
</html>