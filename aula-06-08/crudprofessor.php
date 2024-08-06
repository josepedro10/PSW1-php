<?php
require_once('conexao.php');

{
   
    $nome = $_POST['nomeprofessor'];
    $idade = $_POST ['idade'];

    $sql = "insert into professor(nome,idade) VALUES('$nome', '$idade')";

    $sqlcombanco = $conexao->prepare($sql);

    if($sqlcombanco->execute())
    {
        echo " <strong>OK!</strong> o professor
        $nome foi incluido com sucesso!!!";
    }
}
?>