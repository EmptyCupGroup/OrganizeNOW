<?php 
session_start();
date_default_timezone_set('America/Sao_Paulo');
include_once("conexao.php");
$usuario = $_SESSION['usuario_logado'];
$tarefa = $_POST["tarefa"];
$data = $_POST["data"];
$hora = $_POST["hora"];


$sql = "insert into $tabela1 (usuario,tarefa, data, hora) values ('$usuario','$tarefa', '$data', '$hora')";

$resultado = @mysqli_query($conect,$sql);

if(!$resultado) {
	die('Query Inválida: ' . @mysqli_error($conect));
}
else {
	mysqli_close($conect);
	header("Location: ../tarefas.php");
	exit;
}
?>