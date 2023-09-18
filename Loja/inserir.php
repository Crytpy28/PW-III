<?php 
  
    include("conexao.php");

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
   

    $inserir = $pdo->prepare("insert into loja (Nome,Email,Senha)
                     values ('$Nome','$Email','$Senha')");
    $inserir->execute();
    setcookie("Email",$Email);
    header("Location: index.php");
    
    if(isset($Email_cookie)){

    $NomePro = $_GET['NomePro'];
    $Preco = $_GET['Preco'];
    
    $AS = $pdo->prepare("insert into carrinhos (Nome,Preco)
    values ('$NomePro','$Preco')");
$AS->execute();

header("Location: index.php");
    }else{
      echo 'ERRADO ';
    }
?>
