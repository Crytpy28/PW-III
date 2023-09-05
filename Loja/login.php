<!DOCTYPE html>
<html>
<head>
  <title>Login App</title>
  <link href="Styles/Loginstyles.css" rel="stylesheet">
</head>
<body>
<?php
  if (isset($_SESSION['status'])) {
    echo "<h4>" . $_SESSION['status'] . "</h4>";
    unset($_SESSION['status']);
  }
?>
  <img draggable="false"src="../stadium.png">
  <div class="container">
    <div class="navbar">
      <a href="index.php" dragable="none"><img src="../hip.png" ></a> 
    </div>
    <div class="content">
    <div class="title">Login</div>
      <form action="logarCheck.php" method=POST>
        <input class="input emailInput" type="text" placeholder="Email" name="Email"></input>
        <input class="input passwordInput" type="password" placeholder="Senha" name="Senha"></input>
        <button type="submit" value="&#10148;"></button>
        <a class="Already" href="cadastro.php">Ainda não tem conta?</a>
      </form>
    </div>
  </div>
</body>
</html>