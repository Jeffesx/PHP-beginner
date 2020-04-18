<?php 
	//echo "linhas numeradas:<br>"; 
	//echo "-1<hr>-2<hr>-3<hr>-4<hr>-5<hr>";//
$felicidade =array("Musica","games","livros","familia","amigos","dinheiro","carro","mulheres","filmes","séries");
$tam_lista = count($felicidade);

echo"<b>Melhores coisas!</b><br>";
//while($p<=$tam_lista){
	//echo $lista_alunos[$p],"<br>";
	//$p++;
 for($q=0;$q<=2;$q++){
 	echo $felicidade[$q],"<hr>";}
echo"<b>Coisas que menos gosto!</b><br>";
 for($w=8;$w<=9;$w++){
 	echo$felicidade[$w],"<hr>";}
echo"<b>Tudo que gosto</b><br>";
//while($ult<=$tam_lista){
	//echo $lista_alunos[$ult],"<br>";
	//$ult++;
 for($e=0;$e<=9;$e++){
 	
 	if($e==9){
 		echo$felicidade[$e],".";
 	} else{
 		echo$felicidade[$e],",";
 	}
 		
}
?>