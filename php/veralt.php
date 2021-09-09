<?php
include_once("conexao.php");
session_start();
$id = $_POST['id'];
$taref = $_POST['alt'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$usuario = $_SESSION['usuario_logado'];

$sql = "update $tabela1 set tarefa = '$taref', data = '$data', hora ='$hora' where id = '$id' AND usuario = '$usuario' ";


$resultado = mysqli_query($conect,$sql);



if ($resultado)
{
	
	header("Location: ../tarefas.php");
	exit;
}else{
    echo $novtaref;
    echo $tarefa;
	echo "deu ruim";
	echo mysql_error();
	exit;
}
?>