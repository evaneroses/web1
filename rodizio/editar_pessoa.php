<?php
include_once 'conexao.php';
$conexao=conecta();
$id=$_GET["id"];
$dados=mysqli_query($conexao,"SELECT * FROM `pessoa` where id=$id");
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
	<form action="atualizar_pessoa.php" method="POST">
		<input type="hidden" value="<?php echo $dados['id']?>" name="id" placeholder="ID" disabled="disabled">
		<label>Nome</label><input type="text" value="<?php echo $dados['nome']?>" name="nome" placeholder="Nome">
		<label>Idade</label><input type="text" value="<?php echo $dados['idade']?>" name="idade" placeholder="Idade">
		<label>Cpf</label><input type="text"value="<?php echo $dados['cpf']?>" name="cpf" placeholder="Cpf">
		<label>Turno</label><input type="text" value="<?php echo $dados['turno']?>" name="turno" placeholder="Turno">
		<input type="submit" name="atualizar" value="Alterar">
	</form>
	</div>
</body>
</html>