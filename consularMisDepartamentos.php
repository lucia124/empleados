<?php
/**/
session_start();

function consultarDepartamentos(){include("config.php");
	$_SESSION['login_user'];
	$conexion=$db;
	if(!$conexion){
		echo "no hace conexion";
	}else{
		$sentencia='select dept_name , dept_emp.from_date,dept_emp.to_date
		from departments,dept_emp, employees
		where departments.dept_no = dept_emp.dept_no
		and dept_emp.emp_no=employees.emp_no 
		and employees.emp_no='.$_SESSION['login_user'];
		$linea=mysqli_query($conexion,$sentencia);
		echo "<table><tr><th> Departamento</th></tr>";
		while($registro=mysqli_fetch_array($linea)){
			echo "<tr><td>".$registro["dept_name"]."</td></tr>";
		}
		echo '</table>';
		if($_SESSION['trabajador']==1){
		echo "<a href='welcomeManager.php'>pagina de inicio</a>";
	}else{
		echo "<a href='welcomeEmpleado.php'>pagina de inicio</a>";
	}
	}
	
}
consultarDepartamentos();
?>