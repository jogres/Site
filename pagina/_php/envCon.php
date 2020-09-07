<?php
	include("conecta.php");
    $nomeEmp = $_POST['nomeEmp'];
	$cnpj = $_POST['cnpj'];
	$numCel = $_POST['numCel'];
	$numFix = $_POST['numFix'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$bairro = $_POST['bairro'];
	$rua = $_POST['rua'];
	$numRua = $_POST['numRua'];
	
	

	mysqli_query($conexao,"insert into infoemp(nomeEmp, cnpj, numCel, numFix, estado, cidade, bairro, rua, numRua) values ('$nomeEmp','$cnpj','$numCel','$numFix','$estado','$cidade','$bairro','$rua','$numRua')");
	
?>