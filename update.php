<?php
include_once('conexao.php');

if(isset($_POST['btn-editar'])){
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $id = $_POST['id'];


    $sql = "UPDATE tabelaimg SET codigo = '$codigo', produto = '$produto',
    descricao = '$descricao', valor = '$valor' WHERE id = '$id'"; 

    if(mysqli_query($conexao, $sql)){
        echo "Atualizado com Sucesso:";
        header('Location: consulta.php');
    }
    else{
        echo "Erro Ao Atualizar:";
        header('Location: consulta.php');
    }
}