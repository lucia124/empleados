<?php
/**/
session_start();
include("config.php");
function consultarCategorias($trabajador){
	$_SESSION['login_user'];
	$conexion=$db;
	if(!$conexion){
		echo "no hace conexion";
	}else{
		$sentencia='select title,from_date,to_date from titles 
		where titles.emp_no='.$trabajador
		$linea=mysqli_query($conexion,$sentencia);
		echo "<table><tr><th> categoria</th><th>fecha de inicio</th><th> fecha fin</th></tr>"
		while($registro=mysqli_fetch_array($linea)){
			echo "<tr><td>".$registro["title"]."</td><td>".$registro['from_date']."</td><td>".$registro['to_date']."</td></tr>";
		}
		echo '</table>';
	}
	
}
$trabajador=$_REQUEST["codigo"];
if($trabajador==""){
	echo "no has introducido ningun valor";
}else if ($_SESSION['login_user']==$trabajador){
	echo "el codigo del trabajador es el tuyo , por favor ve a la pagina especial para el";
	echo '<a href="consularMisCategorias.php"> mis departamentos</a>';
}else{
	consultarCategorias($trabajador);
}

?>