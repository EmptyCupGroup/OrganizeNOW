<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>OrganizeNow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/text-colors.css"> 
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
               <a href="config.php">Configurações</a>
               <a href="tarefas.php">Tarefas</a>
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
    <main>
    <div class="principal leftprin">
    <div class="anuncio">
       <h1 id="titulo1">Está <span style="color: rgb(63, 0, 255);">perdido</span> na vida e no dia a dia?</h1>
       <p id="paragrafo1">Conheça agora a plataforma que organiza seus horários e te<br>
        ajuda a lembrar das tarefas e quando elas precisam ser realizadas...</p>
        <div class="locasaiba">
            <a class="saibabutton" style="vertical-align:middle" href="sobre.php"><span>Saiba Mais </span></a>
        </div>
    </div>
    </div>
    <div class="principal rightprin">
        <img id="vetormenina" src="img/VetorMenina.png">
    </div>
</main>
    </body>
</html>
