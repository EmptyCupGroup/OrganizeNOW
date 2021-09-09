<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>OrganizeNow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/table-tarefas.css"> 

</head>
<body>
        <ul class="barranav">
            <li class="itens"><a href="index.php"><span class="logo" style="color: rgb(41, 41, 41);">Organize<span class="logo" style="color: rgb(63, 0, 255);">NOW</span></span></a></li>
            <li class="itens"><a href="sobre.php">Sobre</a></li>
            <li class="itens"><a href="recursos.php">Recursos</a></li>
        </ul>
                <?php
                include_once("php/conexao.php");
                if (!isset($_SESSION['usuario_logado'])) {
                    header("Location: login.php");
                    exit();
                }
                    $usuario = $_SESSION['usuario_logado'];

                    $sql = "select * from $tabela1 where usuario ='$usuario' order by data, hora asc";
                    $resultado = mysqli_query($conect,$sql) or die ("Não foi possível realizar a conexão com o banco de dados");

?>
<table class="table-style">
	  <tr> 
		<th> Data</th>
        <th> Hora </th>
        <th> Tarefa </th>
	</tr>
<?php
while($exibe = mysqli_fetch_array($resultado)){

	echo "
	<tr> 
		
		<td> ".date("d/m/Y", strtotime($exibe['data']))." </td>
        <td> ".date("H:i", strtotime($exibe['hora']))." </td>
        <td> ".$exibe['tarefa']."</td>";
		
	echo "</tr> ";

}
?>
        </table>
        <div class="configt">
            <div id="configtd">
                Configurações das Tarefas
                <a id="delt"><img class="del-table" src="img/del-table.png"></a>
                <a id="altt"><img class="alter-table" src="img/alter-table.png"></a>
                <a id="addtb"><img class="add-table" src="img/add-table.png"></a>
            </div>
            <div id="onAddt" class="addtm">
                <div class="addtm-itens">
                    <div class="addtm-itens-conteudo">
                        <p class="add-t">ADICIONAR TAREFA</p>
                            <form action="php/incluir.php" class="forms" method="post">
                                <input style="margin-left: 15%;" type="text" name="tarefa" id="add-tarefa" maxlength="100" placeholder="Tarefa..." required><br><br>
                                <input style="margin-left: 15%; margin-right: 8%;" type="date" name="data" required>
                                <input type="time" name="hora" min="00:00" max="23:59" required>
                                <input style="margin-left: 40%; margin-top: 5%;"type="submit" value="Adicionar">
                            </form>
                    </div>
                </div>
            </div>
            <div id="onAltt" class="addtm">
                <div class="addtm-itens">
                    <div class="addtm-itens-conteudo">
                    <p class="add-t">ALTERAR TAREFA</p>
                    <?php 
                        $usuario = $_SESSION['usuario_logado'];
                        $sql = "select id,usuario,tarefa from $tabela1 where usuario='$usuario'";

                        $resultado = mysqli_query($conect,$sql);
                        ?>
                        <form action="php/veralt.php" class="forms" method="post">
                                <select style="margin-left: 15%; transform: translateY(-90%);" name="id" id="id">
                                    <?php
                                        while ($exibe = mysqli_fetch_array($resultado)){
                                            echo "<option value=" . $exibe['id'] . ">" . $exibe['tarefa'] . "</option>";
                                        }
                                        
                                    ?>
                                </select><br>
                                <input style="margin-left: 15%;" type="text" name="alt" id="alt" maxlength="100" placeholder="Escreva a alteracao aqui..." required><br><br>
                                <input style="margin-left: 15%; margin-right: 8%;" type="date" name="data" required>
                                <input type="time" name="hora" min="00:00" max="23:59" required>
                                <input style="margin-left: 40%; margin-top: 2%;" type="submit" value="Alterar">
                                
                            </form>
                    </div>
                </div>
            </div>
            <div id="onDelt" class="addtm">
                <div class="addtm-itens">
                    <div class="addtm-itens-conteudo">
                    <p class="add-t">EXCLUIR TAREFA</p>
                            <?php 
                                $usuario = $_SESSION['usuario_logado'];
                                $sql = "select id,usuario,tarefa from $tabela1 where usuario='$usuario'";
                                $resultado = mysqli_query($conect,$sql);
                                ?>
                                <form action="php/verdel.php"  method="post">
                                        <select style="margin-left: 15%; margin-top: 10%;" name="id" id="id">
                                            <?php
                                                while ($exibe = mysqli_fetch_array($resultado)){
                                                    echo "<option value=" . $exibe['id'] . ">" . $exibe['tarefa'] . "</option>";
                                                    
                                                }
                                            ?>
                                        </select><br>
                            <input style="margin-left: 40%; margin-top: 6%;" type="submit" value="Excluir">
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/table-tarefas.js"></script>
    </body>
</html>
