<?php
include_once("conexao.php");
session_start();
$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = $_POST['usuario'];

$sql = "update $tabela set usuario = '$usuario', email = '$email', senha ='$senha' where id = '$id' ";


$resultado = mysqli_query($conect,$sql);



if ($resultado)
{
	
session_start();
session_destroy();
header('Location: ../index.php');
exit();

}else{
    echo $novtaref;
    echo $tarefa;
	echo "deu ruim";
	echo mysql_error();
	exit;
}
?>