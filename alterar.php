<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h3:hover{
            background-color: pink;
        }
        fieldset{
            position: 0;background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
            color: white;
        }
        *{
            color: white;
            
        }
    </style> 
<link rel="stylesheet" href="css2/materialize.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <fieldset>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light"> Alterar Produtos </h3>
            <?php
            include_once('conexao.php');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "SELECT * FROM tabelaimg WHERE id = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                $dados = mysqli_fetch_array($resultado);
            }
            ?>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                
       

        <div class="input-field col s12">
            <input type="text" id="codigo" name="codigo" value="<?php echo $dados['codigo'];?>"> 
            <label for="nome"></label> 
        </div>

        <div class="input-field col s12">
            <input type="text" name="produto"  value="<?php echo $dados['produto'];?>">
            <label for="produto"> </label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="descricao" value="<?php echo $dados['descricao'];?>">  
            <label for="descricao"></label>
        </div>

        <button type="submit" name="btn-editar" class="btn>">Alterar </button>
        <a href="consulta.php" class="btn green">Lista de Produtos</a>

            </form>

        </fieldset>
</body>
</html>