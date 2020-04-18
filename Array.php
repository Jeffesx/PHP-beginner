<?php 
	//echo "linhas numeradas:<br>"; 
	//echo "-1<hr>-2<hr>-3<hr>-4<hr>-5<hr>";//
$lista_alunos=array("Bruna","Jefferson","Lia","Milena","Rafael");
$tam_lista = count($lista_alunos);
$i=0;
echo"<b>Lista de Alunos:</b><br>";
while($i<$tam_lista){
	echo $lista_alunos[$i],"<br>";
	$i++;
}

?>