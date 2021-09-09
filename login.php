<?php
session_start();
include("php/veriflogado.php");

?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title> Login de Usuário </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/paginarl.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    </head>
    <body class="body2">
    <ul class="barranav">
            <li class="itens"><a href="index.php"><span class="logo" style="color: rgb(41, 41, 41);">Organize<span class="logo" style="color: rgb(63, 0, 255);">NOW</span></span></a></li>
            <li class="itens"><a href="sobre.php">Sobre</a></li>
            <li class="itens"><a href="recursos.php">Recursos</a></li>
        </ul>
        <div class="container">
            <div class="conttodo">
                <div class="esquerda">
                    <img src="img/login.png">
                </div>
                <div class="direita">
                    <div class="titulocriar">
                        <p>ENTRAR NA CONTA</p>
                    </div>
                    <?php
                        if (isset($_SESSION['usuario_senhaerrados'])):
                    ?>
                    <div class="alertbox errousu">
                        <strong>ERRO!!!</strong> Usuario ou senha incorretos.
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['usuario_existe']);
                    ?>
                    <form action="php/logar.php" method="POST">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário" required><br>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required><br>
                    <input style="margin-top: 25%;" type="submit" value="Entrar" id="entrar" name="entrar"><br>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
       
