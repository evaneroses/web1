<?php 
	include_once 'conexao.php';
	$conexao=conecta();
	$dados=mysqli_query($conexao,"SELECT * FROM `pessoa`");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<style type="text/css">
		th{
			 background-color:gray;
			 border: 1px solid black;
			 padding: 10px 
		}
		td{
			background-color: #f6f6f6;
			border:1px solid black;
			padding: 8px;
		}
		a{
			text-decoration: none;
			padding: 3px;
			color:black;
			text-align: center;
			cursor: pointer;
		}
		.inserir{
			background-color: #afaff4;
		    border: 2px solid #6969ff;
		    color: #423d3d;
		    border-radius: 4px;
		}
		.inserir:hover{
		    background-color: #d1d1ee;
			border: 2px solid #3f3fe7;
		}
		.remover{
		    background-color: #ffbbc8ee;
    		border: 2px solid #d3243c;
		    color: #423d3d;
		    border-radius: 4px;
		}
		.remover:hover{
		    background-color: #f1dce0;
    		border: 2px solid #d64256;
		}
		.editar{
		    background-color: #ffb000ee;
    		border: 2px solid #ff9200;
		    color: #423d3d;
		    border-radius: 4px;
		}
		.editar:hover{
		    background-color: #f3af17ee;
    		border: 2px solid  #fa940c;;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<th>id</th>
		<th>nome</th>
		<th>idade</th>
		<th>cpf</th>
		<th>turno</th>
		<th>inserir</th>
		<th>Alterar</th>
		<th>Excluir</th>
	</tr>
	<?php
		while($pessoa=mysqli_fetch_assoc($dados)){
	?>
		<tr>
			<td><?php echo $pessoa["id"] ?></td>
			<td><?php echo $pessoa["nome"] ?></td>
			<td><?php echo $pessoa["idade"]?></td>
			<td><?php echo $pessoa["cpf"]?></td>
			<td><?php echo $pessoa["turno"]?></td>
			<td> <a class="inserir" href="inserir_pessoa.php">Inserir</a> </td>
			<td> <a class="editar" href="editar_pessoa.php?id=<?php echo $pessoa['id'] ?> ">Editar</a> </td>
			<td> <a class="remover" href="excluir_pessoa.php?id=<?php echo $pessoa['id'] ?> ">Excluir</a> </td>
		</tr>
	<?php
		}	
	?>
</table>


</body>
</html>