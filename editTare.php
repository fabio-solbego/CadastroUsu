<?php

include("config.php");

$id = $_GET["idTare"];
echo "Primeiro echo: ".$id;

$sql = "SELECT * FROM tbtarefa WHERE idTare=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$titulo = $row['titulo'];
	$descricao = $row['descricao'];
    $data = $row['dateT'];
    $concluida = $row['concluida'];

if (isset($_POST['submit'])) {
	if($_POST['concluida']=="Sim"){
		
		$id = $_GET["idTare"];
		$titulo = $_POST["titulo"];
		$descricao = $_POST['descricao'];
    	$data = $_POST['dateT'];
		$concluida = $_POST['concluida'];

	$sql = "UPDATE tbtarefa SET titulo='$titulo', descricao='$descricao', concluida='$concluida', dateT='$data' WHERE idTare='$id'";

	if (mysqli_query($conn, $sql)) {
		echo "Tarefa atualizada com sucesso.";
	} else {
		echo "Erro ao atualizar usuário: " . mysqli_error($conn);
	}

	header("Location: tare.php");
	exit();

} else {

	echo "Edição cancelada";
	header("Location: tare.php");
}}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\styleEditarUsuario.css">
	<title>Editar usuário</title>
</head>
<body>
<div id="header">
        <div id="menu">
            <input id="Menu" type="button" onclick="location.href='welcome.php'" value="Menu">
            <input id="logout" type="button" onclick="locaton.href='logout.php'" value="Deslogar">
        </div>
    </div>


<form id="formulario" method="post">
		<h1 id="titulo-formulario">Editar usuário:</h1>
		<input class="input" placeholder="Titulo:" type="text" name="titulo" value="<?php echo $titulo; ?>">
		<input class="input" placeholder="Descrição:" type="type" name="descricao" value="<?php echo $descricao; ?>">
        <input class="input" placeholder="Data:" type="date" name="dateT" value="<?php echo $data; ?>">
				<input id="concluidaSim" class ="radio" type="radio" name="concluida" value="Sim">
				<label for="huey">Sim</label>
				<input id="concluidaNao" class ="radio" type="radio" name="cancelada" value="Não" checked>
				<label for="completoNao">Não</label>
				<br>
				<div id="botoes">
		<input id="btn-editar" type="submit" name="submit" value="Editar">
		<input id="Menu" type="button" onclick="location.href='tare.php'" Value="Menu">
	</div>
	</form>
</body>
</html>