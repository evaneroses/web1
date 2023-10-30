<?php
	include_once 'conexao.php';
	$conexao=conecta();
	$id=$_POST["id"];
	$nome=$_POST["nome"];
	$idade=$_POST["idade"];
	$cpf=$_POST["cpf"];
	$turno=$_POST["turno"];
	$sql ="UPDATE pessoa SET  nome = '$nome', idade = $idade, cpf = $cpf,turno = '$turno' WHERE id = $id";
	if($conexao->query($sql) === FALSE){
		echo "Erro ao editar os dados";
	}else{
		header("Location:listar_pessoa.php");
	}
	$conexao->close();
?>

