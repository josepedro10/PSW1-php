<?php
require_once('conexao.php');

{
   
    $nome = $_POST['nomealuno'];
    $idade = $_POST ['idade'];
    $email = $_POST ['email'];
    $regiao = $_POST ['regiao'];

    $sql = "insert into aluno(nome,idade, email, regiao) VALUES('$nome', '$idade', '$email', '$regiao')";

    $sqlcombanco = $conexao->prepare($sql);

    if($sqlcombanco->execute())
    {
        echo " <strong>OK!</strong> o aluno
        $nome foi incluido com sucesso!!!";
    }
}
?>