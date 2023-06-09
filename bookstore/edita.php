<?php

    /* var_dump($_POST); */

    $conexao = new mysqli("localhost","root","","bookstore");

    $sql = 
    "UPDATE livros SET titulo = '{$_POST['titulo']}', ano = {$_POST['ano']}, autores = '{$_POST['autores']}', genero = {$_POST['genero']} WHERE id = {$_POST['id']}";  




    $conexao->query($sql);

    header("location: list.php");

?> 