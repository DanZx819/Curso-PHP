<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal
    // 0b = binário
    // 0 = Octal
        // $num = 010;
        // print "O valor da variavel é $num"

        // $v = "Daniel";
        // var_dump($v);

        // $num = (int) 3e2; // 3 x 10 (2)
        // echo "Resultado $num";
        // var_dump($num);

        // $casado = true;
        // if ($casado == false) {
        //     print "O valor para casado é falso";
        // }else {
        //     print "O valor para casado é verdadeiro";
        // }

        // $vet = [6,2,9,3,5];
        // var_dump($vet);
        
        class Pessoa{
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>