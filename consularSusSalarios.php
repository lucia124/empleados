<?php
/**/
session_start();
include("config.php");
function consultarSalarios($trabajador){
	$_SESSION['login_user'];
	$conexion=$db;
	if(!$conexion){
		echo "no hace conexion";
	}else{
		$sentencia='select salary,from_date,to_date from salaries 
		where salaries.emp_no='.$trabajador
		$linea=mysqli_query($conexion,$sentencia);
		echo "<table><tr><th> salario</th><th>fecha de inicio</th><th> fecha fin</th></tr>"
		while($registro=mysqli_fetch_array($linea)){
			echo "<tr><td>".$registro["salary"]."</td><td>".$registro['from_date']."</td><td>".$registro['to_date']."</td></tr>";
		}
		echo '</table>';
	}
	
}
$trabajador=$_REQUEST["codigo"];
if($trabajador==""){
	echo "no has introducido ningun valor";
}else if ($_SESSION['login_user']==$trabajador){
	echo "el codigo del trabajador es el tuyo , por favor ve a la pagina especial para el";
	echo '<a href="consultarMisSalario.php"> mis Salarios</a>';
}else{
	consultarSalarios($trabajador);
}

?>