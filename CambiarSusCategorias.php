<?php
function insertarCategoria($trabajador1,$puesto){
	include("config.php");
	$conexion=$db;
	/*modificar fecha *//*debe comprobar que hoy no se ha echo ningun cambio*/
	$fecha=date('Y-m-d');
	$nuevafecha ='9999-01-01';
	echo $nuevafecha;
	
	/*comprobar que hace la modificacion del date */
	$sentencia='update titles set to_date="'.$fecha.'" where to_date ="'.$nuevafecha.'" AND emp_no='.$trabajador1; 
echo $sentencia;
	
$registro1=mysqli_query($conexion,$sentencia);
		$sentencia2='insert into titles (emp_no,title,from_date,to_date) 
		values ('.$trabajador1.',"'.$puesto.'","'.$fecha.'","'.$nuevafecha.'")';
		echo $sentencia2;
		
			$registro2=mysqli_query($conexion,$sentencia2);
			echo $registro2;
		if($registro2==1){
			echo "hemos insertado el nuevo puesto";
			
		}
		
		
		
		
		echo "<a href='welcomeManager.php'>pagina de inicio</a>";
	
	}
	
	

	
	
	


$trabajador1=$_REQUEST["codigo"];
$departamento1=$_REQUEST['puesto'];
echo $trabajador1;
echo $departamento1;
insertarCategoria($trabajador1,$departamento1);






?>