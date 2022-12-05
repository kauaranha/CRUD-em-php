<?php
include_once 'conexao.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "DELETE FROM tabelaimg WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
    function myAlert($msg, $url){
        echo '<script language="javascript">alert("'.$msg.'");</script>';
        echo "<script>document.location = '$url' </script>";
    }

    myAlert("Registro excluído com sucesso.","consulta.php");
}
else {
    die ('não foi possível realizar a exclusão.'.mysqli_error($conexao));
}

?>