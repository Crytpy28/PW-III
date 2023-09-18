<?php
    include('Conexao.php');
    $Email_cookie = $_COOKIE['Email'];
    $NomePro = ['Camisa do Brasil'];
    $Preco = ['149,99'];
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/Productstyles.css" rel="stylesheet">
    <title> </title>
</head>
<body>
    <div class= "Janela-login" id=Jlogin>
        <div class= "modal">
            <button class="fechar" id="fechar">x</button>
            <label class="title">Entre agora para comprar este produto</label>
            <input type= "text" placeholder="Email" id="EM"></input>
            <input type="password" placeholder="Senha" id="PS"></input>
            <input type="button" value="Entrar"></input>
            <a href="cadastro.php" id="conta">Não possuí uma conta?</a>
        </div>
    </div>
    <div class= "navbar">
        
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
    <div class="container">
        <div class="box"> 
            <div class="sq"><img src="../Brazil.png"><b><label class ="name">Camisa do Brasil 2022 Masculina</label></b>
                <p>
                Esta camisa faz parte da coleção Stadium da Nike e possui um design que combina detalhes de réplica das camisas usadas pelos jogadores com tecnologia de tecido antissuor para proporcionar conforto e desempenho durante atividades esportivas.<br><br>

                Tecnologia Nike Dri-FIT: Esta tecnologia é projetada para absorver o suor da pele e permitir sua rápida evaporação, mantendo o usuário seco e confortável durante a prática esportiva.<br><br>

                Design de Réplica: O design da camisa é baseado nas camisas usadas pelos jogadores profissionais em campo, oferecendo uma sensação de autenticidade e conexão com o esporte.<br><br>

                Ajuste Padrão: A camisa possui um ajuste padrão que proporciona uma sensação relaxada e fácil durante o uso.
                Material: Feita de 100% poliéster.<br></p>
            </div>
            <form action="inserir.php" method="post">
            <div class="sq"><b><label class="price">R$149,99<label></b>
                <input type="submit" value="COMPRAR"></input>
    </form>
            </div>
        </div>
    </div>
    <script src="JavaScript/ModalJS.js"></script>
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