<?php 
  
    include("conexao.php");

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];


    $inserir = $mysqli->prepare("insert into loja (Nome,Email,Senha)
                     values ('$Nome','$Email','$Senha')");
    $inserir->execute();

    header("location:index.php");


?>