<pre>
    <?php 
        $url = 'https://economia.awesomeapi.com.br/last/USD-BRL';
        $dados = json_decode(file_get_contents($url), true);
        //var_dump($dados);

        $cotação = $dados['USDBRL']['low'];
        print "<p> $cotação USDBRL"
    ?>
</pre>