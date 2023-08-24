<?php
include("conexao.php");

if(isset ($_POST["Email"])||isset($_POST["Senha"])){

    
    $Email = $mysqli->real_escape_string($_POST['Email']);
    $Senha = $mysqli->real_escape_string($_POST['Senha']);

    $sql_code ="SELECT * from loja where Email ='$Email' AND Senha = '$Senha' ";
    $sql_query = $mysqli->query($sql_code) or die("Error on sql ". $mysqli->error);

    $quantidade = $sql_query->num_rows;
    if($quantidade == 1){

        $usuario =$sql_query->fetch_assoc();

        if  (!isset($_SESSION)){
            session_start();
        }
        $_SESSION['Email'] = $usuario['Email'];

        header("Location: index.php");
    } else{
        echo "Error";
    }
}
 
?>

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

<div class="navbar"> 
  <a draggable ="false" href="index.php"><img draggable ="false" src="../hip.png" ></a>
  <div class="container">
    <div class="content">
      <div class="title">Login</div>
      
      <input class="input emailInput" type="text" placeholder="Email" name="Email"></input>
      <input class="input passwordInput" type="password" placeholder="Senha" name="Senha"></input>

      <input type="submit" value="&#10148;"></input>

      <div class="forgotPasswordText">Esqueceu sua senha?</div>
      <div class="newAccount">Ainda não tem conta?</div>
    </div>
  </div>
</body>
</html>