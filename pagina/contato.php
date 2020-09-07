<!DOCTYPE html>
<html leng="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Contato</title>
	<link rel="stylesheet" type="text/css" href="_css/pagina.css"/>
	<link rel="stylesheet" type="text/css" href="_css/form.css"/>
</head>
<body>
	<div id="dmenu">
		<nav id="menu">
			<ul>
				<li><a href="inicio.php">Inicio</a></li>
				<li><a href="certificados.php">Certificações</a></li>
				<li><a href="contato.php">Contato</a></li>
				
			</ul>
		</nav>
	</div>	
	<div id="interface">
		<form method="post" action="_php/envCon.php">
			<fieldset>
				<legend> Informação da Empresa </legend>
					<p><label for="nomeEmp"> Nome da Empresa: </label>
					<input type="text" id="nomeEmp" name="nomeEmp"></p>
					<p><label for="cnpj"> CNPJ: </label>
					<input type="text" id="cnpj" name="cnpj" maxlength="14"></p>
					<p><label for="numCel"> Número Celular: </label>
					<input type="text" id="numCel" name="numCel"></p>
					<p><label for="numFix"> Número Telefonico: </label>
					<input type="text" id="numFix" name="numFix"></p>
				
			</fieldset>
			<fieldset>
				<legend> Endereço da Empresa </legend>
					<p><label for="cidade"> Cidade: </label> 
					<input type="text" id="cidade" name="cidade"></p>
					<p><label for="estado"> Estado:</label>
					<select name="estado">
					<option value="AC">AC</option> 
					<option value="AL">AL</option>
					<option value="AP">AP</option> 
					<option value="AM">AM</option> 
					<option value="BA">BA</option> 
					<option value="CE">CE</option> 
					<option value="DF">DF</option> 
					<option value="ES">ES</option> 
					<option value="GO">GO</option> 
					<option value="MA">MA</option>
					<option value="MT">MT</option>
					<option value="MS">MS</option> 
					<option value="MG">MG</option>
					<option value="PA">PA</option> 
					<option value="PB">PB</option> 
					<option value="PR">PR</option> 
					<option value="PE">PE</option> 
					<option value="PI">PI</option> 
					<option value="RJ">RJ</option> 
					<option value="RN">RN</option> 
					<option value="RS">RS</option> 
					<option value="RO">RO</option> 
					<option value="RR">RR</option> 
					<option value="SC">SC</option> 
					<option value="SP">SP</option> 
					<option value="SE">SE</option> 
					<option value="TO">TO</option>
				</select></p>
					<p><label for="bairro"> Bairro: </label>
					<input type="text" id="bairro" name="bairro"></p>
					<p><label for="rua"> Rua: </label>
					<input type="text" id="rua" name="rua"></p>	
					<p><label for="numRua"> Nº: </label>
					<input type="type" id="numRua" name="numRua" maxlength="4"></p>
			</fieldset>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</div>
	<div id="dFooter">
		<footer id="rodape">
			<ul>
				<li><a href="https://www.facebook.com/zodi.hhh.1276487/" target="_blank">Facebook</a></li>
				<li><a href="https://www.linkedin.com/in/silvarochawesley/" target="_blank">Linkedin</a></li>
				<li><a href="https://github.com/jogres" target="_blank">GitHub</a></li>
			</ul>
		</footer>
	</div>
</body>
</html>