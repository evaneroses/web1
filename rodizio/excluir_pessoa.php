<?php 
	include_once 'conexao.php';
	$conexao=conecta();
	$id=$_GET['id'];
	mysqli_query($conexao," DELETE FROM `pessoa` WHERE `pessoa`.`id` =".$id."");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao excluir os dados";
	}else{
		header("Location:listar_pessoa.php");
	}
?>