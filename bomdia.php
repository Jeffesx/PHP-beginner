<?php 
		echo "Seja Bem vindo ao PHP<br>";
		echo " <br>E agora são:".date('G:i:s');
		$hora=date('H');

		if($hora<=12){
			echo "<br> Bom dia";
		} else if(($hora>=12) && ($hora<=18)) {
			echo "<br> Boa tarde";
		} else {
			echo"<br> Boa Noite";
		}


?>
