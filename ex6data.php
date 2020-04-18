<?php 
		echo "Seja Bem vindo ao PHP<br>";
		$diasem=date('w');
		$dias=6;
		echo "Faltam,".($dias-$diasem)."dia ,para o sábado";
		echo " <br>E agora são:".date('g:i:s');
?>
