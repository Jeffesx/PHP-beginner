<meta charset="UTF-8">

<?php


function linha($semana)
{
		echo "<tr>";
		for($i=0;$i<=6;$i++){
			if(isset($semana[$i])){//verificar se tem dia na semana
				if ($semana[$i]==date('j')) {
					echo "<td><b>",$semana[$i],"</b></td>";
				} elseif ($i==0) {
					echo "<td><font color=red>",$semana[$i],"</font></td>";
				} elseif ($i==6){
					echo "<td><b>",$semana[$i],"<b></td>";
				} else{

					echo "<td>{$semana[$i]}</td>";
				}
			} else {
				echo "<td></td>";
			}
		}


		
	
		// <td>{$semana[0]}</td>
			// <td>{$semana[1]}</td>
			// <td>{$semana[2]}</td>
			// <td>{$semana[3]}</td>
			// <td>{$semana[4]}</td>		// <td>{$semana[5]}</td>
			// <td>{$semana[6]}</td>
		echo "</tr>";	
	}
function calendario(){
	$semana=array();
	for($dia=1;$dia<=31;$dia++){
	array_push($semana, $dia);
	if(count($semana) == 7){
		linha($semana);
		$semana=array();
	}
	

	}

	linha($semana);
}

for($c=0;$c<=12;$c++){
echo "Mês",$c+1;
echo "<table border=1>
 <tr>
 	<th>Dom</th>
 	<th>Seg</th>
 	<th>Ter</th>
 	<th>Qua</th>
 	<th>Qui</th>
 	<th>Sex</th>
 	<th>Sáb</th>
 </tr>";
calendario(); 
 /*
<?php linha(); ?>
<?php linha(); ?>
<?php linha(); ?>
<?php linha(); ?>
<?php linha(); ?>
*/
echo "</table>";
}


?>