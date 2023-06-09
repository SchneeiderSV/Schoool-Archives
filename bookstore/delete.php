<?php

    $conexao = new mysqli("localhost","root","","bookstore");

    $sql = "DELETE FROM livros WHERE id = {$_GET['id']}";

    $conexao->query($sql);

    header("location: index.php");

?>