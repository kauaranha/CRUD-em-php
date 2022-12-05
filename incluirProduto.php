<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/materialize.min.css">
    <title>PHP com MySQL</title>
</head>
<body>
    <h3>Novo Produto</h3>
    <?php   

    include_once('conexao.php');
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $sqlinsert = "insert into tabelaimg (codigo, produto, descricao, data, imagem, valor)
                                values ('$codigo', '$produto', '$descricao', '$data', '$imagem', $valor)";

    $resultado = mysqli_query($conexao, $sqlinsert);
    if (!$resultado)
    {
        die('Query invalida: ' .mysqli_error($conexao));
    }

    else
    {
        echo "Registro de cadastro concluido com sucesso";
    }

    mysqli_close($conexao);

    ?>

    <br> <br>
    <a href="Form_Incluir.html" class="btn"> Voltar </a>

    
</body>
</html>