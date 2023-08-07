<?php 
    session_start(); 
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/Indexstyles.css" rel="stylesheet">
    <title>4D</title>

</head>
<body>
    <div class="navbar">
       <img src="../hip.png">
    <text>
        <a href="login.php">
        <?php
            echo "Faça login"
        ?></a>
    </text>
    </div>
    <div class ="container">
        <a href="CamisadoBrasil.php" class="item -item1"> <img src="../Brazil.png"><h4>Camisa do Brasil masculina</h4></a>
        <a href="#" class="item -item2"><img src="../franca.png"><h4>Camisa da França unisex</h4></a>
        <a href="#" class="item -item3"><img src="../holanda.png"><h4>Camisa da Holanda masculina</h4></a>
    </div>
    
</body>
</html>