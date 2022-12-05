<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/materialize.min.css">
    <title>Incluir Usuario</title>
</head>
<body>

    <h3>Novo Usuario</h3>

    <?php

    include_once('conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sqlinsert = "insert into usuarios (usuario, senha)
                                    values('$usuario', '$senha')";


    $resultado = mysqli_query($conexao, $sqlinsert);
    if (!$resultado)
    {
        die('Query invalida: ' .mysqli_error($conexao));
    }

    else
    {
        echo "Usuario cadastrado com sucesso";
    }

    mysqli_close($conexao);

    ?>

    <br> <br>
    <a href="login.html" class="btn"> Voltar </a>
    
</body>
</html>