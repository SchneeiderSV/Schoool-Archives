<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <div class="container">

        <form method="GET" action="process.php">

            <input type="number" name="v1" required placeholder="n1">
            <input type="number" name="v2" required placeholder="n2">    
            
            <input type="submit" name="botao" value="som">

            <input type="submit" name="botao" value="sub">

            <input type="submit" name="botao" value="div">

            <input type="submit" name="botao" value="mul">


            
            
            <?php

            $nome = "Ineicious";

            echo("<h2> hello world, esse cara é estranho -> {$nome} </h2>");

            ?> 

        </form>
        
    </div>

</body>
</html>