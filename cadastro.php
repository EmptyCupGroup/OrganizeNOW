<?php
session_start();
include("php/veriflogado.php");
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Usuário </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/paginarl.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="body">
        <ul class="barranav">
            <li class="itens"><a href="index.php"><span class="logo" style="color: rgb(41, 41, 41);">Organize<span class="logo" style="color: rgb(63, 0, 255);">NOW</span></span></a></li>
            <li class="itens"><a href="sobre.php">Sobre</a></li>
            <li class="itens"><a href="recursos.php">Recursos</a></li>
        </ul>
        <div class="container">
            <div class="conttodo">
                <div class="esquerda">
                    <img src="img/registro.png">
                </div>
                <div class="direita">
                    <div class="titulocriar">
                        <p>CRIAR CONTA</p>
                    </div>
                    <?php
                        if (isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="alertbox errousu">
                        <strong>ERRO!!!</strong> Escolha outro usuario e tente novamente.
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['usuario_existe']);
                    ?>
                    <?php
                        if (isset($_SESSION['usuario_cadastrado'])):
                    ?>
                    <div class="alertbox cadastrado">
                        <strong>Sucesso!!!</strong> Você foi cadastrado com sucesso.
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['usuario_cadastrado']);
                    ?>
                    <form action="php/cadastrar.php" method="POST">
                    <input type="text" name="usuario" id="usuario" maxlength="30" placeholder="Usuário" required><br>
                    <input type="email" id="email" name="email" maxlength="50" placeholder="Email" required><br>
                    <input type="password" name="senha" id="senha" maxlength="20"  placeholder="Senha" required><br>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                    </form>
                    <div class="japosc">
                    <a href="login.php">Já tenho uma Conta ➞</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>