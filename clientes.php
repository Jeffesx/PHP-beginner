
<!DOCTYPE html>
<meta charset="utf-8">

<html>
<head>
	<title>Tarefas</title>
</head>
<body>

<?php session_start(); ?>
	
		
	<h1> Lista telefonica</h1>	
	<form>
		<fieldset>
				<legend>Novo Cliente</legend>
				<label>
					Nome:
					<input type="text" name="nome" required>
				</label>
				<br>
					<!-- <input type="submit" value="Cadastrar"> -->
				<label>
					Telefone:
					<input type="text" name="telefone" required>
				</label>
					<!-- <input type="submit" value="Cadastrar"> -->
					<br>
				<label>
				E-mail:
					<input type="email" name="email" required>
				</label>
				<br>
					<input type="submit" value="Cadastrar">
		</fieldset>	
	</form>

	<?php

		if(isset($_GET['nome'])){
	
			$_SESSION['Cliente'][]= $_GET['nome'];
		}
			$Cliente= array();

		if(isset($_SESSION['Cliente'])){

			$Cliente = $_SESSION['Cliente'];

		}

		if(isset($_GET['telefone'])){
	
			$_SESSION['Telefone'][]= $_GET['telefone'];
		}
			$Telefone= array();

		if(isset($_SESSION['Telefone'])){

			$Telefone = $_SESSION['Telefone'];
		}

		if(isset($_GET['email'])){
	
			$_SESSION['Email'][]= $_GET['email'];
		}
			$Email= array();

		if(isset($_SESSION['Email'])){

			$Email = $_SESSION['Email'];
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
	
	