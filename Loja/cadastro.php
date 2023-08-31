<?php
  include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login App</title>
  <link href="Styles/Cadastrostyles.css" rel="stylesheet">
</head>
<body>
  <img draggable="false"src="../stadium.png">
  <div class="container">
    <div class="navbar">
      <a href="index.php" dragable="none"><img src="../hip.png" ></a> 
    </div>
    <div class="content">
      <div class="title">Sign-up</div>
        <form action="inserir.php" method=POST>
          <input class="Nome" type="text" placeholder="Nome completo" name="Nome"></input></br>
          <input class="Email" type="text" placeholder="Email" name="Email"></input></br>
          <input class="Senha" type="password" placeholder="Senha" name="Senha"></input></br>
          <button type="submit" name="Cadastro" id="Cadastro" >&#10148;</button>
          <a class="Already" href="login.php">Já tem uma conta?</a>
        </form>
      </div>
    </div>
</body>
</html>