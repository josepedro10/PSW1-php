<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        
        <h1>Testes</h1>

        <h2>Constantes</h2>
        
        <pre>
            <?php 
            define ("PI", 3.1415);

            echo PI;
            ?>
        </pre>

        <pre>
            <?php 
            //define("PI", 3.1415, true );

            //echo PI;
            ?>
        </pre>

        <h2>Constantes pre-definidas</h2>

        <pre>
            <?php 
            function funcConsts() {
                echo "Arquivo" .__FILE__. "<br>";
                echo "Diretorio" .__DIR__. "<br>";
                echo "LINHA: ".__LINE__."<br>";
                echo "FUNÇÃO: ".__FUNCTION__."<br>";
            }
            funcConsts();
            ?>
        </pre>

        <pre>
            <?php 
            class veiculo {
                private $marca;
                function __construct() {
                echo "CLASSE: ".__CLASS__."<br>";
                }
               function setMarca($marca) { $this->marca = $marca;
                echo "MÉTODO: ".__METHOD__."<br>";
               } }
               $obj = new veiculo();
                $obj->setMarca("Wolksvagem");
               
            ?>
        </pre>

        <h2>Variaveis Superglobais (pré-definidas)</h2>

        <pre>
            <?php 
            $var_pre = get_defined_vars();
            print_r($var_pre);
            ?>
        </pre>

        <h2>Funções </h2>

        <pre>
            <?php 
            function nome_funcao($par_1 =0, $par_2 = "vazio") {
                echo "codigo da funçao <br>";
                return "Dado de retorno:" .$par_1."/".$par_2; 
            }
            $retorno = nome_funcao();
            echo $retorno. "<br> <br>";
            $retorno = nome_funcao(12, "Bill Gates");
            echo $retorno."<br><br>";
            ?>
        </pre>

            <h2>Soma</h2>

        <pre>
            <?php 
            function soma() {
                $n1 = 1;
                $n2 = 2;
                $soma = $n1 + $n2;
                echo "O valor é $soma";
            }
            $soma = soma();
            ?>
        </pre>

        <h2>Soma com parametro</h2>

        <pre>
            <?php 
            function somacomparametro($p1, $p2) {
                $resultado = $p1 + $p2;
                echo "O resultado é $resultado";
            }
            somacomparametro(20, 40);
            ?>
        </pre>

        <h2>Soma com multiplicação</h2>

        <pre>
            <?php 
            function somacommultiplicacao($p1, $p2, $p3) {
                $soma = $p1 + $p2;
                $resultado = $soma * $p3;
                echo "A soma é $resultado";
            }
            somacommultiplicacao(10, 20 ,50);
            ?>
        </pre>

        <h2>Exemplo</h2>

        <pre>
            <?php 
            function somaexemplo($n1, $n2) {
                $s1 = $n1 + $n2;
                $s2 = $s1 - $n1;
                $s3 = $s2 * $n2;
                $resultado = $s3 / $n1;
                return ($resultado);
            }
            echo  somaexemplo(100, 400);
            
            ?>
        </pre>

        <h2>Exemplo 2</h2>

        <pre>
            <?php 
            function exemplo2($n1, $n2){
                return $n1 ** $n2;
            }
            echo exemplo2(10, 2);
            ?>
        </pre>
    </div>
</body>
</html>