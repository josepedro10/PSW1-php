<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="box">
    <h1>Array Laços</h1>
    <h2>Exemplo 01</h2>
    <pre>
        <?php 
        $a1 = array("Antonio", "Luis", "Jose");
        echo "o nome de é $a1[1]";
        ?>
    </pre>
    <h2>Array com FOR</h2>
        <?php 
        $a2 = array(10, 9, 8, 7);
        ?>
        <pre>
            <?php 
            echo "$a2[0]";?>
        </pre>
    <h2>impressão com for </h2>
    <pre>
        <?php
            $a3 = array("antonio", "jose", "marcos", "joao"); 
            for($i=0;$i<4;$i++){
            echo "posicao $i o valor i $a3[$i]<br>";
            echo "posicao $i o valor i$a3[$i]<br>";
            }
        ?>
    </pre>
    <h2>Exemplo com foreach</h2>
    <pre>
        <?php 

        foreach ($a3 as $dado) {
            echo "$dado <br>";
        }
        ?>
    </pre>
    <h2>foreach com chave valor </h2>
    <pre>
        <pre>
            <?php 
            $var = array("Maria" => 25,
                        "Joao" => 44,
                        "Jose" =>12,
                        "Neusa" => 73
            );
            foreach($var as $chave => $valor) {
                echo "$chave: tem $valor anos <br>";
            }
            ?>
        </pre>
    </pre>
    <h2> Exemplo do print</h2>
    <!--print_r mostra o que tem armazenado-->
    <pre>
        <?php 
        print_r($var);
        ?>
    </pre>
    <h2>Array multidimensional: definição explicita  </h2>
    <pre>
        <?php 
        $aluno = array("Maria" => array("endereco" => "Rua chile 1846",
                                        "bairro" => "Reuboças"),
                        "João" => array ("endereco" => "Rua Iapo 243",
                                        "bairro" => "Prado Vleho"),
                        "zeca" => array("endereco" => "Rua Pesquiro 3 24",
                                        "bairro" => "Urandi")
        );
        print_r($aluno["Maria"]["endereco"]);
        echo "<br>";
        print_r($aluno ["Maria"]["bairro"]);
        echo "<br>";
        print_r($aluno["João"]["bairro"]);
        echo "<br>";
        print_r($aluno["zeca"]["endereco"]);
        echo "<br>";
        print_r($aluno);
        ?>
    </pre>
    <h2>Impressão com foreach</h2>
    <pre>
        <?php 
        foreach($aluno as $chave => $aux) {
            echo $chave . ": <br>";
            foreach($aux as $chave => $valor) {
                echo " - $valor <br>";
            }
            }
        ?>
    </pre>
    </div>
</body>
</html>