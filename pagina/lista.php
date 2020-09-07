<!DOCTYPE html>
<html leng="pt-br">
<head>
	<meta cahrset="UTF-8"/>
	<title> listagem </title>
</head>
<body>
	<table width="100%" border="1" cellspacing="0" cellpadding="10" >
		<tr>
			<td><strong>id</strong></td>
			<td><strong>Nome da Empresa</strong></td>
			<td><strong>CNPJ</strong></td>
			<td><strong>Número Celular</strong></td>
			<td><strong>Número Telefonico</strong></td>	
			<td><strong>Estatdo</strong></td>
			<td><strong>Cidade</strong></td>
			<td><strong>Bairro</strong></td>
			<td><strong>Rua</strong></td>
			<td><strong>Nº</strong></td>
			
		</tr>
		<?php
			include("_php/conecta.php");
			$seleciona = mysqli_query($conexao,"select * from infoemp order by id ");
			
			while($campo=mysqli_fetch_array($seleciona)){
				
		?>
		<tr>
			<td><?=$campo["id"]?></td>
			<td><?=$campo["nomeEmp"]?></td>
			<td><?=$campo["cnpj"]?></td>
			<td><?=$campo["numCel"]?></td>
			<td><?=$campo["numFix"]?></td>
			<td><?=$campo["estado"]?></td>
			<td><?=$campo["cidade"]?></td>
			<td><?=$campo["bairro"]?></td>
			<td><?=$campo["rua"]?></td>
			<td><?=$campo["numRua"]?></td>
		</tr>
		<?php 
				
			}?>
	</table>
</body>
</html>