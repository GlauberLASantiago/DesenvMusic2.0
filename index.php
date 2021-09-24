<body bgcolor="#C5E0B3">

    <?php

    $botao = "ligado"; {
        echo "
    <h1>Elementos para o desenvolvimento musical</h1>
    <p></p>
    
    <p>Além de praticar sozinho no quarto, existem as seguintes atividades muito importantes a serem consideradas para seu desenvolvimento musical:</p>
     ";
        sleep(2);
        for ($numero = 1; $numero <= 8; $numero++) {
            sleep(1);
            if ($numero == "1") {
                echo "<h2>1-Escutar</h2>";
            }

            if ($numero == "2") {
                echo "<h2>2-Apresentar-se</h2>";
            }

            if ($numero == "3") {
                echo "<h2>3-Assistir apresentações</h2>";
            }

            if ($numero == "4") {
                echo "<h2>4-Tocar informalmente</h2>";
            }

            if ($numero == "5") {
                echo "<h2>5-Improvisar</h2>";
            }

            if ($numero == "6") {
                echo "<h2>6-Ensinar</h2>";
            }

            if ($numero == "7") {
                echo "<h2>7-Ensaiar em grupo</h2>";
            }

            if ($numero == "8") {
                echo "<p>Fonte: HARNUM, Jonathan. The Practice of Practice: How to Boost Your Music Skills. Sol Ut Press, 2014. 258 p.</p>";
            }
        }
    }
//echo date('h:i:s') . "<br>";
//$variavel = "MinhaVariavel";
//$variavel = $variavel . " Santiago";
//echo $variavel;
//$numero = 100;
//echo $numero + 100;
//$x = 1;
