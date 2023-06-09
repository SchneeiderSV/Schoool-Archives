<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>bookstore</title>
</head>
<body>
    <div class="container">
        <div class="caixa">
                
            <a href='index.php?genero=all'>All</a>
            <a href='index.php?genero=1'>Técnico</a>
            <a href='index.php?genero=2'>Auto-Ajuda</a>
            <hr>
            <?php
                $conexao = new mysqli("localhost","root","","bookstore");

                $sql = "SELECT * FROM livros";

                if(isset($_GET['genero'])){
                    if($_GET['genero']==1){
                        $sql = "SELECT * from livros WHERE genero = 1";
                    }else if($_GET['genero']==2){
                        $sql = "SELECT * from livros WHERE genero = 2";
                    }else{
                        $sql = "SELECT * from livros";
                    }
                }


                $resultado = $conexao->query($sql); 

                $livros = $resultado->fetch_all(MYSQLI_ASSOC);

                if(!empty($livros)){
                    foreach($livros as $livro){
                        echo "<div class='box'>";
                            echo $livro["titulo"]." - ";
                            echo $livro["ano"]." - ";
                            echo $livro["autores"]." - ";
                        
                        if($livro['genero']==1){
                                echo "Técnico"." - ";
                        }else {
                                echo "Auto-Ajuda"." - ";
                        }
                        echo "<a href='delete.php?id={$livro['id']}'>delete</a>"." - ";
                        echo "<a href='formEdita.php?id={$livro['id']}'>edita</a>";
                        echo "</div>";
                    } 
                } else {
                        echo "Nenhum livro registrado, faça as honras.";
                }
                

                echo "<a href='formAdiciona.html'>Adicionar</a>";



            ?>
        </div>
    </div>
</body>
</html>
