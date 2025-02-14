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
                <h1>Conversor para Dolar v2</h1>
                <?php 

                    if (isset($_GET["num"]) && $_GET["num"] > 0) {
                        $rs = $_GET["num"];
                        //Pegar cotação
                        $url = 'https://economia.awesomeapi.com.br/last/USD-BRL';
                        $dados = json_decode(file_get_contents($url), true);
                
                        $cotação = $dados['USDBRL']['low'];

                        $calc = $rs * $cotação;
                        print "<p class ='php_p'>Valor informado: $rs. <br>Valor convertido:  $calc.<br>
                        Valor do real para dolar: $cotação</p>";
                    }else{
                        print "<p class ='php_p'> Digite um valor válido. </p>";
                    }
                
                ?>
                <button type="button" onclick="window.history.back()" class="voltar">Voltar</button>
               
            </form>
        </div>
    </section>
</body>
</html>