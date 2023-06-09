<?php

    $conexao = new mysqli("localhost","root","","bookstore");

    $sql = 
    "INSERT INTO livros(titulo, ano, autores, genero) 
    VALUES ('{$_POST["titulo"]}', {$_POST["ano"]}, '{$_POST["autores"]}', {$_POST["genero"]})";

    $conexao->query($sql);

    header("location: index.php");

?> 