<meta charset="UTF-8">
<?php 
	$nome =array("Irineu","Serjão","Tião");
	$tam_lista = count($nome);
	$anoncs =array(1998,1968,1951);
	$tam_lista = count($anoncs);
	$anoatual=date('Y');
	$expct=75;
	
	echo $nome[0],"<hr>";
	echo $anoatual-$anoncs[0];
	for ($c=0;$c<=($anoatual-$anoncs[0]); $c++){
		echo "|";
	}
	
		echo "<hr>";
	echo $nome[1],"<hr>";
	echo $anoatual-$anoncs[1];
	
	for ($c=1;$c<=($anoatual-$anoncs[1]); $c++){
		echo "|";
	}
		echo "<hr>";
	echo $nome[2],"<hr>";
	echo $anoatual-$anoncs[2];
	
	for ($c=2;$c<=($anoatual-$anoncs[2]); $c++){
		echo "|";
	}
		echo "<hr>";	
	
	for ($c=0; $c<=$expct; $c++) {
		if ($c<$expct) {
			echo "<font color='white'>|</font>";
		} else {
			echo "|FIM";
		}
		
	}
?>