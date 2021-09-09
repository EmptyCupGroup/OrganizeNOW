<?php
include_once("conexao.php");
session_start();

$id = $_POST['id'];
$usuario = $_SESSION['usuario_logado'];

$sql = "delete from $tabela1 where id='$id' and usuario= '$usuario'";


$resultado = mysqli_query($conect,$sql);



if ($resultado)
{
	
	header("Location: ../tarefas.php");
	exit;
}else{
	echo "deu ruim";
	echo mysql_error();
	exit;
}
?>