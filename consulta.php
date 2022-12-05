<?php
    include_once('conexao.php');
?>

<html> 
    <head>
        <meta charset="utf-8">
        <title> Sistema de Cadastros </title>
        <link rel="stylesheet" href="css2/materialize.min.css">
        <meta name="viewport" content="width=device-whidth, initial-scale=1.0"/> 
        <style>
            body{
                background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Farteeartistas.com.br%2Fnoite-estrelada-a-obra-prima-de-vincent-van-gogh%2F&psig=AOvVaw3GXVqq_xVr_Z4UaSJJt9UF&ust=1654037263716000&source=images&cd=vfe&ved=0CAkQjRxqFwoTCICzqI-niPgCFQAAAAAdAAAAABAD);
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col s12 m8 push-m2">
                <h3> Produtos cadastrados </h3>

                <table class="striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Código</th>
                            <th>Produto</th>
                            <th>Descirção</th>
                            <th>Valor</th>
                            <th>Imagem</th>
                            <th>Alterar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
            </div>
        </div>

        <tbody>
            <?php
                $sql = "SELECT * FROM tabelaimg";
                $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) > 0){
                    while($dados = mysqli_fetch_array($resultado)){
                
                ?>
                
                <tr>
                    <td><?php echo $dados ['id']; ?></td>
                    <td><?php echo $dados ['codigo']; ?></td>
                    <td><?php echo $dados ['produto']; ?></td>
                    <td><?php echo $dados ['descricao']; ?></td>
                    <td><?php echo $dados ['valor']; ?></td>

                    <?php
                        if(empty($dados['imagem'])){
                            $imagem = 'semfoto.png';
                        }
                        else{
                            $imagem = $dados['imagem'];
                        }

                        $id = $dados['id'];

                        echo "<td align='center'> <a href='verProdutos.php?id=$id'> 
                        <img src= 'imagens/$imagem' width='50px' heigth='50px'/> </td> </a>";

                        echo "<td align='center'> <a href='alterar.php?id=$id'> Alterar </a>";
                        echo "<td align='center'> <a href='excluir.php?id=$id'> Excluir </a>";

                        
                        ?>
                        
                 </tr>

                <?php
                }
                }
                ?>
        
        </table>    
        </tbody>

        <br> <br>
        <a href="Form_Incluir.html" class="btn"> Voltar </a>
        
    </body>




</html>