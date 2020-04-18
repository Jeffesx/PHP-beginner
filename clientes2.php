
<!DOCTYPE html>
<meta charset="utf-8">

<html>
<head>
	<title>Tarefas</title>
</head>
<body>

<?php 
	//session_start(); 
	setcookie(0);
?>
	
		
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

		if(isset($_POST['nome'])){
	
			$_COOKIE['Cliente'][]= $_POST['nome'];
		}
			$Cliente= array();

		if(isset($_COOKIE['Cliente'])){

			$Cliente = $_COOKIE['Cliente'];

		}

		if(isset($_POST['telefone'])){
	
			$_COOKIE['Telefone'][]= $_POST['telefone'];
		}
			$Telefone= array();

		if(isset($_COOKIE['Telefone'])){

			$Telefone = $_COOKIE['Telefone'];
		}

		if(isset($_POST['email'])){
	
			$_COOKIE['Email'][]= $_POST['email'];
		}
			$Email= array();

		if(isset($_COOKIE['Email'])){

			$Email = $_COOKIE['Email'];
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
	
	