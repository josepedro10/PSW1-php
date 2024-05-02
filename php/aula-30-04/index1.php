<?php 
    if(is_null ($var)) {
        echo "Variavel \$var é nula <br>";
    }
    $var = "Bill Gates";
    if(is_string($var)) {
        echo "Variavel \$var é uma string <br>";
    }
    $var = 12;
    if(is_integer($var)) {
        echo "Variavel \$var é um inteiro <br>";
    }
    $var = false;
    if(is_bool($var)) {
        echo "Variavel \$var é booleana <br>";
    }
?>