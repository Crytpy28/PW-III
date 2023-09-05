<?php
  include("conexao.php");
  $Email_cookie = $_COOKIE['Email'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    <link href="Styles/Indexstyles.css" rel="stylesheet">
    <title>4D</title>
</head>
<body>
  <div class="navbar">
    <a draggable ="false"  href="index.php"><img draggable ="false" src="../hip.png" ></a>
      <?php
        if(isset($Email_cookie)){
          
          echo"Bem-vindo $Email_cookie <br>";
        }else{
        echo" 
          <div class='dropdown'>
            <button class='dropbtn'>Faça login ou cadastre-se</button>
            <div class='dropdown-content'>
              <a class='drop' href='login.php'>Login</a>
              <a class='drop' href='cadastro.php'> Cadastre-se</a>
            </div>
          </div>";
        } 
      ?>
  </div>
  <div class ="container">
    <a href="CamisadoBrasil.php" class="item -item1"> <img src="../Brazil.png"><h4>Camisa do Brasil Masculina</h4></a>
    <a href="CamisadaFranca.php" class="item -item2"><img src="../Franca.png"><h4>Camisa da França Masculina</h4></a>
    <a href="CamisadaHolanda.php" class="item -item3"><img src="../Holanda.png"><h4>Camisa da Holanda Masculina</h4></a>
  </div>
  <footer>
    <div class="footer">

    <div class="row">
    <ul>
    <li><a href="#">Contate-nos</a></li>
    <li><a href="#">Nossos serviços</a></li>
    <li><a href="#">Política de Privacidade</a></li>
    <li><a href="#">Termos e Condições</a></li>
    </ul>
    </div>

    <div class="row">
    DIREITOS A NOIS MESMO 
    </div>
    </div>
  </footer>
</body>
</html>