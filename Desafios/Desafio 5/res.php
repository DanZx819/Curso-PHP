<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="container1">
        
            
        <form method="get" class="form-box">
            <h1>Analisador de numeros</h1>
            <?php
                if(isset($_GET["num"]) && $_GET["num"] > 0){
                    $num = $_GET["num"];
                    $x = explode('.', (string)$num);
                    $int = $x[0];
                    $frac = $x[1];
                    echo "<p class ='php-p'>Seu número: $num <br> Parte inteira: $int <br> Parte decimal: $frac </p>";
                }else{
                    print"<p class = 'php-p'>Digite um valor válido</p>";
                }
                ?>
            <button type="button" onclick="window.history.back()">Voltar</button>
           
        </form>
    
</section>
</body>
</html>