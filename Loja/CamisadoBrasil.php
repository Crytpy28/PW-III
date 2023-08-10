
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
            <input type="button" value="entrar"></input>
            <a href="cadastro.php" id="conta">não possuí uma conta?</a>
        </div>

    </div>


    <div class= "navbar">
    <a draggable ="false"  href="index.php"><img draggable ="false" src="../hip.png" ></a>
    </div>
    <div class="container">
        <div class="box"> 
        <div class="sq"><img src="../Brazil.png"><b><label class ="name">Camisa do Brasil 2022 canarinho masculina</label></b>
    <p>Lorem ipsum dolor hic lsdasd jaksjdoajskda asjdkajs asdaj sdqiw sdas jfdf kxvnmm das uwl</p></div>

        <div class="sq"><b><label class="price">R$149,99<label></b>
       <input onclick="abrirModal()" type="button" value="COMPRAR"></input></div>

</div>
 
</div>

<script src="JavaScript/ModalJS.js"></script>
</body>
</html>