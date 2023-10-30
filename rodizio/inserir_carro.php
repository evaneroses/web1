<!DOCTYPE html>
<html>
<head>
	<title>Inserir</title>
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
	<form action="salvar_carro.php" method="POST">
		<label>Marca</label><input type="text" name="marca" placeholder="Marca">
		<label>Modelo</label><input type="text" name="modelo" placeholder="Modelo">
		<label>Ano</label><input type="text" name="ano" placeholder="Ano">
		<label>Cor</label><input type="text" name="cor" placeholder="Cor">
		<label>Nro de Assentos</label><input type="text" name="qtd_lugares" placeholder="Numero de Assentos">
		<label>Consumo de Combustivel</label><input type="text" name="consumo_comb" placeholder="Consumo de Combustivel">
		<input type="submit" name="Fazer Cadastro">
	</form>
	</div>
</body>
</html>