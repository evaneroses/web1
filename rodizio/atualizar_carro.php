<?php
	include_once 'conexao.php';
	$conexao=conecta();
	$id=$_POST["id"];
	$marca=$_POST["marca"];
	$modelo=$_POST["modelo"];
	$ano=$_POST["ano"];
	$cor=$_POST["cor"];
	$qtd_lugares=$_POST["qtd_lugares"];
	$consumo_comb=$_POST["consumo_comb"];
	
	$sql = "UPDATE `carros` SET `marca` = '$marca', `modelo` = '$modelo', `ano` = $ano, `cor` = '$cor', `qtd_lugares` = $qtd_lugares, `consumo_comb` = $consumo_comb WHERE id = $id");
	
	if($conexao->query($sql) === FALSE){
		echo "Erro ao editar os dados";
	}else{
		header("Location:listar_carro.php");
	}
	$conexao->close();
?>
