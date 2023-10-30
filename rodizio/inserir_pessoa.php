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
	<form action="salvar_pessoa.php" method="POST">
		<label>Nome</label><input type="text" name="nome" placeholder="Nome">
		<label>Idade</label><input type="text" name="idade" placeholder="Idade">
		<label>Cpf</label><input type="text" name="cpf" placeholder="Cpf">
		<label>Turno</label><input type="text" name="turno" placeholder="Turno">
		<input type="submit" name="Fazer Cadastro">
	</form>
	</div>
</body>
</html>