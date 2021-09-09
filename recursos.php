<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>OrganizeNow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/text-colors.css"> 
    <link rel="stylesheet" type="text/css" href="css/buttons.css"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    </head>
<body>
        <ul class="barranav">
            <li class="itens"><a href="index.php"><span class="logo" style="color: rgb(41, 41, 41);">Organize<span class="logo" style="color: rgb(63, 0, 255);">NOW</span></span></a></li>
            <li class="itens"><a href="sobre.php">Sobre</a></li>
            <li class="itens"><a href="recursos.php">Recursos</a></li>
            <?php
                if (isset($_SESSION['usuario_logado'])):
            ?>
                <div class="drop">
                <span> <li><a class="buttonnav buttonmc">Minha Conta</a></li></span>
               <div class="intdrop">
               <a href="emdesen.php">Configurações</a>
               <a href="emdesen.php">Tarefas</a>
               <a href="php/logout.php"> Sair</a>
                </div>
                </div>
            <?php
                else:
            ?>
            <li class="navbuttons"><a href="login.php" class="buttonnav buttonlog">Logar</a></li>
            <li class="navbuttons"><a href="cadastro.php" class="buttonnav buttonreg">Cadastre-se</a></li>
            <?php
                endif;
            ?>
        </ul>

        <div class="sobre">
        <h1>Recursos</h1>
        <div class="soblinhor"></div>
        <p class="psobre"> Nesse site você irá encontrar formas simples e intuitivas de organizar 
            seus afazeres diários. Usamos um sistema de tabela para organizar as tarefas atribuidas, e de forma simples
        incluimos botões de alteração e exclusão de tarefas. Tudo pensado na organização da sua rotina.</p>
    </div>
        
    </body>
</html>
