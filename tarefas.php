
<!DOCTYPE html>
<meta charset="utf-8">
<?php session_start(); ?>
<html>
<head>
	<title>Tarefas</title>
</head>
<body>
	
		
	<h1> Gerenciador de tarefa</h1>	
	<form>
		<fieldset>
				<legend>Nova tarefa</legend>
				<label>
					Tarefa:
					<input type="text" name="nome" required>
				</label>
					<input type="submit" value="Cadastrar">
		</fieldset>	
	</form>
		<?php

			if(isset($_GET['nome'])){
		
				$_SESSION['lista_tarefas'][]= $_GET['nome'];
			}
				$lista_tarefas= array();

			if(isset($_SESSION['lista_tarefas'])){
	
				$lista_tarefas = $_SESSION['lista_tarefas'];
			}

		?>


		<table>
		<tr>
			<th>Tarefas</th>
		</tr>
		<?php foreach($lista_tarefas as $tarefa): ?>
			<tr>
				<td><?php echo $tarefa; ?></td>
			</tr>
		<?php T_FOREACH; ?>
	</table>
		</body>
</html>