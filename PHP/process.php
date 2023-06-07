<?php 

    $_GET;

    /*var_dump($_GET);*/
/* 
    echo $_GET['v1'];
    echo "<br>";
    echo $_GET['v2'];
    echo "<br>";--
    echo $_GET['submit'];
    echo "<br>";
    echo $_GET['v1'] + $_GET['v2'];
*/
    $valor= 0;

    $action = $_GET['botao'];
    if ($action == "som") {
        $valor = $_GET["v1"] + $_GET["v2"];
    }else if ($action == "sub") {
        $valor = $_GET["v1"] - $_GET["v2"];
    }else if ($action == "div") {
        $valor = $_GET["v1"] / $_GET["v2"];
    }else if ($action == "mul") {
        $valor = $_GET["v1"] * $_GET["v2"];
    }
    echo $valor;


?>