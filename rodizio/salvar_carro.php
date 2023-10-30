<?php
	include_once 'conexao.php';
	$conexao=conecta();
	$marca=$_POST["marca"];
	$modelo=$_POST["modelo"];
	$ano=$_POST["ano"];
	$cor=$_POST["cor"];
	$qtd_lugares=$_POST["qtd_lugares"];
	$consumo_comb=$_POST["consumo_comb"];
	
	
	
	mysqli_query($conexao,"INSERT INTO `carros` (`id`, `marca`, `modelo`, `ano`, `cor`, `qtd_lugares`, `consumo_comb`) VALUES (NULL, '".$marca."', '".$modelo."', '".$ano."', '".$cor."', '".$qtd_lugares."', '".$consumo_comb."');");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao salvar os dados";
	}else{
		header("Location:listar_carro.php");
	}
?>

