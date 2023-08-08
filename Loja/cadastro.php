<?php
include('conexao.php');
$Email = ['Email'];

$query = "INSERT INTO loja(email) VALUES ('$Email');";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login App</title>
  <link href="Styles/Loginstyles.css" rel="stylesheet">
</head>
<body>
 <img draggable="false"src="../stadium.png">

<div class="navbar"><img src="../hip.png"> 
  <div class="container">
    <div class="content">
      <div class="title">Sign-up</div>
      <form action="" method=POST>
      <input class="Nome" type="text" placeholder="Nome completo"></input>
      <input class="Email" type="text" placeholder="Email"></input>
      <input class="Senha" type="password" placeholder="Senha"></input>
      <input class="SenhaRep" type="password" placeholder="Repita sua senha"></input>

      <button type="submit" name="Cadastro" value="&#10150;"></button>
</form>
 
   
  </div>
</body>
</html>