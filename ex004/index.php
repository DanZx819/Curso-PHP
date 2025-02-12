<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Tipos de Strings</h1>
    <h2>Concatenação no PHP</h2>
    <p>Para concatenar duas strings não é utilizado o operador +, para se concatenar duas strings em PHP você deve utilizar o (.).</p>
    <h2>Com duas aspas " "</h2>
    <p>Qualquer coisa escrita denro de duas aspas duplas por exemplo "Curso" "PHP" é uma string interpretavel que no caso significa que a linguagem vai interpretar a string.</p>
    <h2>Com aspas simples ' '</h2>
    <p>Basicamente não possui interpretação da string.</p>
    <h3>exemplo de Aspas duplas e simples.</h3>
    <?php 
    $nome = "Daniel";
    $sobrenome = "Zanchetta";
    $apelido = "Gafanhoto";
    print "Com aspas duplas: ";
    print "$nome \"$apelido\" $sobrenome \u{1F596}";
    ?>
    <br>
    <?php 
    print "Sem aspas duplas.";
    print '$nome $sobrenome \u{1F596}';?>

    <h2>Constantes</h2>
    <p>Consantes não são interpretaveis dentro das duas aspas más somente pelo método da concatenação.</p>
    <?php 
        const ESTADO = "SP";
        
        print "Eu moro em". ESTADO;
    ?>
    <br>
    <?php 
        $ano = date("d/M/Y");
        print "Hoje é dia $ano."
    ?>
</body>
</html>