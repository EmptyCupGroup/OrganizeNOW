<?php
session_start();
include_once("conexao.php");

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header("Location: index.php");
    exit();
}

$usuario = @mysqli_real_escape_string($conect, trim($_POST['usuario']));
$senha = @mysqli_real_escape_string($conect, trim($_POST['senha']));

$veriF = "SELECT usuario FROM contas WHERE usuario = '$usuario' AND senha = '$senha'";
$result = @mysqli_query($conect, $veriF);
$row = @mysqli_num_rows($result);

if ($row == 1){
    $_SESSION['usuario_logado'] = $usuario;
    header("location: ../index.php");
    exit();
} else {
    $_SESSION['usuario_senhaerrados'] = true;
    header("Location: ../login.php");
    exit();
}
?>