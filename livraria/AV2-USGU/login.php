<?php

$conexao = new mysqli("localhost","root","","livraria");
    
$sql = "SELECT * FROM usuarios WHERE login = '{$_POST['login']}' and senha = '{$_POST['senha']}'";

$resultado = $conexao->query($sql);

$usuarios = $resultado->fetch_all(MYSQLI_ASSOC);

if(count($usuarios)==0){
    header("location: formAdicionaUsuario.php");
}else{
    session_start();
    $_SESSION['id'] = $usuarios[0]['id'] ;
    $_SESSION['nome'] =  $usuarios[0]['nome'];
    header("location: index.php");
}

?>