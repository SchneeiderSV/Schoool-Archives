<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookstore</title>
</head>
<body>
    <?php

    $conexao = new mysqli("localhost","root","","bookstore");

    $sql = "SELECT * FROM livros WHERE id = {$_GET['id']}";

    $resultado = $conexao->query($sql); 

    $livro = $resultado->fetch_all(MYSQLI_ASSOC);


    echo "<a href='index.html'>Index</a>";
    echo"<hr>";

    ?>

    <form method="POST" action="edita.php">
        
        <?php 
        
        echo "<input type='text' name='titulo' value={$livro[0]['titulo']} required>";
        echo "<input type='number' name='ano' min='0' max='2023' value={$livro[0]['ano']} required>";
        echo "<input type='text' name='autores' value={$livro[0]['autores']} required>";

        echo "<input type='hidden' name='id' value={$livro[0]['id']}>";

        echo "Gênero: <select name='genero'>";
            if ($livro[0]['genero']==1) {
                echo "<option value='1' selected>Técnico</option>";
                echo "<option value='2'>Auto-ajuda</option>";

            }else{
                echo "<option value='1'>Técnico</option>";
                echo "<option value='2' selected>Auto-ajuda</option>";
            }
        echo "</select>";

        echo "<input type='submit' name='botao' value='Vai Gustavo'>";

        ?>
    </form>

</body>
</html>