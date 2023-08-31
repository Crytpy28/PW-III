<?php

    // Inicia sessões
    session_start();

    // Verifica se existe os dados da sessão de login
    if(!isset($_SESSION["status"]))
    {
    // Usuário não logado! Redireciona para a página de login
    header("Location: cadastro.php ");
    exit;
    }
    else{
        echo"Teste";
    }
    
?>