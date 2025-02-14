<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
<section class="container1">
        <div class="container-box">
            
            <form action="res.php" method="get" class="form-box">
                <h1>Conversor para Dolar v1</h1>
                <?php 

                    if (isset($_GET["num"]) && $_GET["num"] > 0) {
                        $rs = $_GET["num"];
                        $calc = $rs * 5.72;
                        print "<p>Valor informado: $rs. <br>Valor convertido:  $calc.</p>";
                    }else{
                        print "<p> Digite um valor válido. </p>";
                    }
                
                ?>
                <button type="button" onclick="window.history.back()" class="voltar">Voltar</button>
               
            </form>
        </div>
    </section>
</body>
</html>