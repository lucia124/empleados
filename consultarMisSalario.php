<?php
/**/
session_start();

function consultarSalarios(){
	include("config.php");
	$_SESSION['login_user'];
	$conexion=$db;
	if(!$conexion){
		echo "no hace conexion";
	}else{
		$sentencia='select salary,from_date,to_date from salaries 
		where salaries.emp_no='.$_SESSION['login_user'];
		$linea=mysqli_query($conexion,$sentencia);
		echo "<table><tr><th> salario</th><th>fecha de inicio</th><th> fecha fin</th></tr>";
		while($registro=mysqli_fetch_array($linea)){
			echo "<tr><td>".$registro["salary"]."</td><td>".$registro['from_date']."</td><td>".$registro['to_date']."</td></tr>";
		}
		echo '</table>';
		if($_SESSION['trabajador']==1){
		echo "<a href='welcomeManager.php'>pagina de inicio</a>";
	}else{
		echo "<a href='welcomeEmpleado.php'>pagina de inicio</a>";
	}
	}
	
}
consultarSalarios();
?>