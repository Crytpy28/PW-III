<?php 

include("conexao.php");

if(isset ($_POST["Email"])||isset($_POST["Senha"])){

    
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];

    $sql_code ="SELECT * from loja where Email ='$Email' AND Senha = '$Senha' ";
    $sql_query = $pdo->query($sql_code) or die("Error on sql ". $pdo->error);

    $quantidade = $sql_query->num_rows;
    if($quantidade == 1){

        $usuario =$sql_query->fetch_assoc();

        if  (!isset($_SESSION)){
            session_start();
        }
        $_SESSION['Email'] = $usuario['Email'];
        setcookie("Email",$Email);
        header("Location: index.php");
    } else{
        echo "Error";
    }
}
 

?>