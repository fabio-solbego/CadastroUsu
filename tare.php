<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tarefas</title>

    <style>
        body{
            background-color:Tomato;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif
        }
</style>
<center>
</head>

<body>
    <div id="header">
        <div id="menu">
        <input class="botoes" id="Menu" type="button" onclick="location.href='welcome.php'" value="Menu">
            <input class="botoes" id="logout" type="button" onclick="location.href='logout.php'" value="Deslogar">
        </div>
    </div>

    <div id="conteudo">
        <h1>Tarefas:</h1>
        <div id="coisas">
             <input id="btnAdicionar" type="button" onclick="location.href='addTare.php'" value="Adicionar tarefa!">
            <table >
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Concluida</th>
                    <br>
                    <th>Alterar</tr>
                </tr>
                <br>
                <?php
                session_start();
                include("config.php");
                

                if($_SESSION['adm'] > 0){

                $sql = "SELECT * FROM tbtarefa ORDER BY idTare";
                $res = $conn->query($sql) or die($conn->error);

        
                    while ($row = mysqli_fetch_assoc($res)) {

                        echo "<tr>";
                        echo "<td>" . $row['idTare'] . "</td>";
                        echo "<td>" . $row['titulo'] . "</td>";
                        echo "<td>" . $row['descricao'] . "</td>";                       
                        echo "<td style='width:10em'>" . $row['dataT'] . "</td>";
                        echo "<td>" . $row['concluida'] . "</td>"; 
                    
                        echo "<td style='width:10em'><a href='editTare.php?idTare=" . $row['idTare'] . "'>Editar</a> | <a href='editTare.php?idTare=" . $row['idTare'] . "'>Excluir</a></td>";
                        echo "</tr>";
                    }
                }else{

                $id=$_SESSION['idUsu'];
                
                $sql = "SELECT * FROM tbtarefa WHERE fkIdUsu='$id' ORDER BY idTare";
                $res = $conn->query($sql) or die($conn->error);

                    while ($row = mysqli_fetch_assoc($res)) {
                        $idtare = $row['idTare'];
                        
                        echo "<tr>";
                        echo "<td>" . $row['idTare'] . "</td>";
                        echo "<td>" . $row['titulo'] . "</td>";
                        echo "<td>" . $row['descricao'] . "</td>";                       
                        echo "<td>" . $row['dateT'] . "</td>";
                        echo "<td>" . $row['concluida']. "</td>"; 
                        echo "<td><a href='editTare.php?idTare=".$idtare."'>Editar</a></td>";
                        echo "<td><a href='delTare.php?id=".$idtare."'>Excluir</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</center>
</html>