<html> 
    <head>
        <meta charset="utf-8">
        <title> Sistema de Cadastros </title>
        <link rel="stylesheet" href="css2/materialize.min.css">
        <meta name="viewport" content="width=device-whidth, initial-scale=1.0"/> 
    </head>

    <body>

        <h3>Consulta Geral - Detalhes Do Produto</h3>

        <?php

            function convertedata($data){
                $data_vetor = explode('-', $data);
                $novadata = implode('/', array_reverse($data_vetor));
                return $novadata;
            }

            include_once ('conexao.php');

            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            else{
                header('location: consulta.php');
            }

            //fazendo pesquisa com o id recebido
            $sql = "select * from tabelaimg where id = $id";
            $resultado = mysqli_query($conexao, $sql);

            if(!$resultado){
                echo'<input type="button" onclick="window.location='."'consulta.php'".';"
                value = "voltar"><br><br>';

                die('<b> Query Invalida: </b>' .@mysqli_error($conexao));
            }

            $dados=mysqli_fetch_array($resultado);
            echo"<table border = ''0px> <tr><td width= '250px'>";

            if(empty($dados['imagem'])){
                $imagem = 'SemImagem.png';
            }
            else{
                $imagem = $dados['imagem'];
            }
            echo"<img src='imagens/$imagem'>";
            echo"</td>";

            echo "<td width='400px'>";
            echo "<b>Data: </b>".convertedata($dados['data'])."<br><br>";
            echo "<b>Id: </b>".($dados['id'])."<br>";
            echo "<b>Codigo: </b>".($dados['codigo'])."<br>";
            echo "<b>Produto: </b>".($dados['produto'])."<br>";
            echo "<b>Descrição: </b>".($dados['descricao'])."<br>";
            echo "<b>Valor: </b>".($dados['valor'])."<br>";
            echo "</td> </tr> </table>";

            mysqli_close($conexao);

        ?>

        <br>
        <a href="consulta.php" class="btn"> Lista de Produtos</a>

    </body>

</html>