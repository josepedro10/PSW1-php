<?php
require_once('conexao.php');

{
   
    $nome = $_POST['nomedisciplina'];
    $professor = $_POST ['professor'];
    $sala = $_POST ['sala'];
    $horario = $_POST ['horario'];


    $sql = "insert into disciplina(nome,professor,sala,horario) VALUES('$nome', '$professor', '$sala', '$horario')";

    $sqlcombanco = $conexao->prepare($sql);

    if($sqlcombanco->execute())
    {
        echo " <strong>OK!</strong> o disciplina
        $nome foi incluido com sucesso!!!";
    }
}
?>