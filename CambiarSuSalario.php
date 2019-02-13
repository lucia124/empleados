<?php
function insertarSalario($trabajador,$salario){
	include("config.php");
	$conexion=$db;
	/*modificar fecha */
	$fecha=date('Y-m-d');
	$nuevafecha = '9999-01-01';
	$sentencia='update salaries set to_date="'.$fecha.'"
	where emp_no= '.$trabajador .' and to_date>"9999-01-01"';
	echo $sentencia;
	$linea=mysqli_query($conexion,$sentencia);

	
		$sentencia1='insert into salaries (emp_no,salary,from_date,to_date)
		values ('.$trabajador.','.$salario.',"'.$fecha.'","'.$nuevafecha.'")';
		echo $sentencia1;
		
		
		if(mysqli_query($conexion,$sentencia1)){
			echo 'se ha cambiado el sueldo';
		}
		echo "<a href='welcomeManager.php'>pagina de inicio</a>";
	
	}
	
	
	
	
	
	
	


$trabajador=$_REQUEST["codigo"];
$salario=$_REQUEST['salario'];


insertarSalario($trabajador,$salario);






?>
