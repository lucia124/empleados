<?php
function insertarDepartamento($trabajador1,$puesto){
	include("config.php");
	$conexion=$db;
	/*modificar fecha *//*debe comprobar que hoy no se ha echo ningun cambio*/
	$fecha=date('Y-m-d');
	$nuevafecha ='9999-01-01';
	echo $nuevafecha;
	
	
	

$sentencia3='update dept_emp set to_date="'.$fecha.'" where empt_no='.$trabajador1.' and to_date="'.$nuevafecha.'"';
		$linea3=mysqli_query($conexion,$sentencia3);
		echo $sentencia3;
		$sentencia2='insert into dept_emp (emp_no,dept_no,from_date,to_date) 
		values ('.$trabajador1.',"'.$puesto.'","'.$fecha.'","'.$nuevafecha.'")';
		echo $sentencia2;
		if($linea2=mysqli_query($conexion,$sentencia2)){
			
		
			echo "hemos insertado el nuevo puesto";
			
		
		}
		
		
		echo "<a href='welcomeManager.php'>pagina de inicio</a>";
	
	}
	
	
	
	
	
	


$trabajador1=$_REQUEST["codigo"];
$departamento1=$_REQUEST['departamento'];
echo $trabajador1;
echo $departamento1;
insertarDepartamento($trabajador1,$departamento1);






?>