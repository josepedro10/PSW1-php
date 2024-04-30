<?php 
    // array exemplo 1
    $var = array(1, 2, 3, 4);
    echo "<p> exemplo 1 </p>";
    echo "var é $var[0] <br>";
    echo "var é $var[1] <br>";
    echo "var é $var[2] <br>";
    echo "var é $var[3] <br>";

    // array exemplo 2
    $var1 = array("Fabio" =>30, "Eber" =>40, "Wq" =>60);
    echo "<p> exemplo 2 </p>";
    echo "$var1[Fabio] <br>";
    echo "$var1[Eber] <br>";
    echo "$var1[Wq] <br>";

    // array exemplo 3
    $var2 = array(0 =>5, 6 =>8, 9 =>15);
    $var2[1] = 20;
    $var2[2] = 3;
    $var2[0] = 4;
    echo "<p> exemplo 3 </p>";
    echo "$var2[0] <br>";
    echo "$var2[6] <br>";
    echo "$var2[9] <br>";
    echo "$var2[1] <br>";
    echo "$var2[2]"; 
?>