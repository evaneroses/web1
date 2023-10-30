<?php
	include_once 'conexao.php';
	$conexao=conecta();
	$nome=$_POST["nome"];
	$idade=$_POST["idade"];
	$cpf=$_POST["cpf"];
	$turno=$_POST["turno"];
	
	mysqli_query($conexao,"INSERT INTO `pessoa` (`id`, `nome`, `idade`, `cpf`, `turno`) VALUES (NULL, '".$nome."', '".$idade."', '".$cpf."', '".$turno."');");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao salvar os dados";
	}else{
		header("Location:listar_pessoa.php");
	}
?>

