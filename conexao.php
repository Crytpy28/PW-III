<?php

    $username = "root";
    $password = "";
    $database = "Loja";
    $host ="localhost";
    
    $mysqli = new mysqli($host,$username, $password,$database);
    
    if ($mysqli->error){
        die("Falha ao conectar ao banco de dados".$mysqli->error);
        
    }

?>