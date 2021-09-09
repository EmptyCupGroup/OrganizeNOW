<?php
session_start();

?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title> Configurações de Usuário </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/paginarl.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="body">
		<?php
        if (!isset($_SESSION['usuario_logado'])) {
            header("Location: login.php");
            exit();
        }
			include_once("php/conexao.php");
			$usuario = $_SESSION['usuario_logado'];
			$sql = "select id,usuario,email, senha from $tabela where usuario='$usuario'";
			$query = mysqli_query($conect,$sql);
			$exibe = mysqli_fetch_array($query);
		?>
		
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
                        <p>ALTERAR CONTA</p>
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
                        <strong>Sucesso!!!</strong> Você alterou seu cadastrado com sucesso.
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['usuario_cadastrado']);
                    ?>
                    <form action="php/altcadastrar.php" method="POST">
                    <input type="text" name="usuario" id="usuario" maxlength="30" required value="<?php echo $usuario; ?>"/><br>
					
				
                    <input type="email" id="email" name="email" maxlength="50" required  value="<?php echo $exibe['email']; ?>"/> <br>
					
				
                    <input type="text" name="senha" id="senha" maxlength="20"  required  value="<?php echo $exibe['senha']; ?>"/><br>
					
                    <input type="submit" value="Alterar Cadastro" id="cadastrar" name="cadastrar">
				
                    <input type="hidden" name="id" id="id"  required  value="<?php echo $exibe['id']; ?>"/><br>
                    </form>
                </div>
            </div>
        </div>
		
					
    </body>
</html>