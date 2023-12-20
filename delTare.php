<?php

// conectar-se ao banco de dados
include("config.php");
$id = $_GET["id"];

if (isset($_POST['btnexcluir'])) {

if($_POST['confirmacao']=="sim"){
	$sql = "DELETE FROM tbtarefa WHERE idTare=$id";
		if (mysqli_query($conn, $sql)) {
			echo "<script> alert('Tarefa excluída com sucesso.'); </script>";
			echo "<script> location.href='tare.php'; </script>";
		}else{
			echo "Erro ao excluir tarefa: " . mysqli_error($conn);
		}
}else{
	echo "<script> alert('Tarefa excluída com sucesso.'); </script>";
}}
?>

<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\pageExcluirUsu.css">
	<title>Excluir</title>
</head>

<body>
	<form id="formulario" method="post">
		<h1>Excluir tarefa</h1>
		<p>Tem certeza que deseja excluir essa tarefa?</p>

		<div id="container-radio">
			<div>
				<input class="radio" type="radio" name="confirmacao" value="sim">Sim<br>
			</div>
			<div>
				<input class="radio" type="radio" name="confirmacao" value="nao" checked>Não<br>
			</div>
		</div>
		<input id="btn-excluir" type="submit" name="btnexcluir" value="Excluir">
		<br>
		
	</form>
	<div id="menu">
        <input class="botoes" id="Menu" type="button" onclick="location.href='welcome.php'" value="Menu">
</div>
</body>

</html>