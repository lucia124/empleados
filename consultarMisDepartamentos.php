<?php
/**/
session_start();

function consultarDepartamentos(){
	include("config.php");
	$_SESSION['login_user'];
	$conexion=$db;
	if(!$conexion){
		echo "no hace conexion";
	}else{
		$sentencia='select dept_name,from_date,to_date 
		from departments,dept_emp 
where departments.dept_no = dept_emp.dept_no 
and dept_emp.emp_no='.$_SESSION['login_user'];
		echo $sentencia;
		$linea=mysqli_query($conexion,$sentencia);
		echo "<table><tr><th> Departamento</th><th> fecha desde </th><th> fecha hasta</th></tr>";
		while($registro=mysqli_fetch_array($linea)){
			echo "<tr><td>".$registro["dept_name"]."</td><td>".
			$registro["from_date"]."</td><td>"
			.$registro["to_date"]."</td></tr>";
		}
		echo '</table>';
	}
	/*volver a la pagina de inicio*/
	if($_SESSION['trabajador']==1){
		echo "<a href='welcomeManager.php'>pagina de inicio</a>";
	}else{
		echo "<a href='welcomeEmpleado.php'>pagina de inicio</a>";
	}
	
}
consultarDepartamentos();
?>