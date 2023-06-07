<?php

    $conexao = new mysqli("localhost","root","","bookstore");

    $sql = "SELECT * FROM livros";

    $resultado = $conexao->query($sql); 
    
    /* var_dump($resultado);

    print_r($resultado);
    
    echo"<hr>"; */

    $livros = $resultado->fetch_all(MYSQLI_ASSOC);

    /* var_dump($livros);

    print_r($livros);
    
    echo"<hr>"; */

    echo "<a href='index.html'>Index</a>";
    echo"<hr>";



    foreach($livros as $livro){
        /* echo $livro["id"]." - "; */
        echo $livro["titulo"]." - ";
        echo $livro["ano"]." - ";
        echo $livro["autores"]." - ";
        echo $livro["genero"]." - ";
        echo "<a href='delete.php?id={$livro['id']}'>delete</a>"." <hr>";
        

    }


?>