<?php
session_start();
include_once("conexao.php");

$usuario = @mysqli_real_escape_string($conect, trim($_POST['usuario']));
$email = @mysqli_real_escape_string($conect, trim($_POST['email']));
$senha = @mysqli_real_escape_string($conect, trim($_POST['senha']));

$selectC = "SELECT COUNT(*) AS total FROM contas WHERE usuario = '$usuario'";
$resultC = @mysqli_query($conect, $selectC);
$row = @mysqli_fetch_assoc($resultC);

if ($row['total'] != 0){
    $_SESSION['usuario_existe'] = TRUE;
    header("Location: cadastro.php");
    exit();
}

$insertC = "INSERT INTO contas (usuario, email, senha) VALUES ('$usuario','$email','$senha')";

if ($conect->query($insertC) === TRUE){
    $_SESSION['usuario_cadastrado'] = TRUE;
}

$conect->close;

header("Location: ../cadastro.php");
exit();
?>