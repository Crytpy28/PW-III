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
<form action="logarCheck.php" method=POST>
  <div class="navbar"> 
    <a draggable ="false" href="index.php"><img draggable ="false" src="../hip.png" ></a>
    <div class="container">
      <div class="content">
        <div class="title">Login</div>
        <input class="input emailInput" type="text" placeholder="Email" name="Email"></input>
        <input class="input passwordInput" type="password" placeholder="Senha" name="Senha"></input>
        <input type="submit" value="&#10148;"></input>
        <a class="newAccount" href="cadastro.php">Ainda não tem conta?</div>
      </div>
    </div>
  </div>
</form>
</body>
</html>