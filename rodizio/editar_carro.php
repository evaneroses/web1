<?php
include_once 'conexao.php';
$conexao=conecta();
$id=$_GET["id"];
$dados=mysqli_query($conexao,"SELECT * FROM `carros` where id=$id");
$dados=mysqli_fetch_assoc($dados);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<style type="text/css">
		input{
			padding: 5px;
			margin-bottom: 4px;
		}
		input{
			display: block;
		}
		.form{
			margin-left: 40%;
			margin-top: 10%;
		}
	</style>
</head>
<body>
	<div class="form">
	<form action="atualizar_carro.php" method="POST">
		<input type="hidden" value="<?php echo $dados['id']?>" name="id" placeholder="ID" disabled=disabled>
		<label>Marca</label><input type="text" value="<?php echo $dados['marca']?>" name="marca" placeholder="Marca">
		<label>Modelo</label><input type="text" value="<?php echo $dados['modelo']?>" name="modelo" placeholder="Modelo">
		<label>Ano</label><input type="text"value="<?php echo $dados['ano']?>" name="ano" placeholder="Ano">
		<label>Cor</label><input type="text" value="<?php echo $dados['cor']?>" name="cor" placeholder="Cor">
		<label>Nro Assentos</label><input type="text"value="<?php echo $dados['qtd_lugares']?>" name="qtd_lugares" placeholder="Nro Assentos">
		<label>Consumo </label><input type="text" value="<?php echo $dados['consumo_comb']?>" name="conumo_comb" placeholder="Consumo">
		<input type="submit" name="atualizar" value="Alterar">
	</form>
	</div>
</body>
</html>