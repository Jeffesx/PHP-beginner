
<!DOCTYPE html>
<meta charset="utf-8">

<html>
<head>
	<title>Tarefas</title>
</head>
<body>

<?php 
	session_start(); 
	//setcookie(0);
?>
	
		
	<h1> Tarefas</h1>	
	<form>
		<fieldset>
				<legend>Nova tarefa</legend>
				<label>
					<p>Descrição(Opicional):</p>
					<textar type="text" name="desc" required>
				</label>
				<br>
					<!-- <input type="submit" value="Cadastrar"> -->
				<label>
					<p>Prazo(Opicional):</p>
					<input type="text" name="prazo" required>
				</label>
					<!-- <input type="submit" value="Cadastrar"> -->
					<br>
				<label>
				Prioridade:
					<input type="radio" name="priori" value="baixa" checked/>
					Baixa
					<input type="radio" name="priori" value="media"/>
					Média
					<input type="radio" name="priori" value="alta"/>
					Alta
				</label>
					<label>
					Tarefa concluida:
					<input type="checkbox" name="concluida" value="sim">
				</label>
				<br>
					<input type="submit" value="Cadastrar">
		</fieldset>
			

	</form>

	<?php

		if(isset($_GET['nome'])&& $_GET['nome'] != ){
			$tarefa=array('' => , );
	}

	?>


	<table>
		<tr>
			<th>Tarefas</th>
		</tr>

		<?php foreach ($Cliente as $nome); ?>
		<tr>
			<td><?php echo $nome; ?></td>
		</tr>

		<?php foreach ($Telefone as $telefone); ?>
		<tr>
			<td><?php echo $telefone; ?></td>
		</tr>


		<?php foreach ($Email as $email); ?>
		<tr>
			<td><?php echo $email; ?></td>
		</tr>

		<?php T_FOREACH; ?>


			

	</table>


		

</body>
</html>
	
	