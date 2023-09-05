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

    $COMPRAR = $_POST['COMPRAR'];
    if(isset($Email_cookie)){
        $inserir = $pdo->prepare("insert into loja (Compra)  values ('$COMPRAR')");
        header("Location: index.php");
      }
    
?>
