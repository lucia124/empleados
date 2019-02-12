<html>
<head>
</head>
<body>
<form action ="CambiarSuDepartamento.php" method='post'>
 <fieldset>
Introduce el codigo del trabajador
<input type="text" name="codigo" ></input><br>
nombre del departamento
<select name="departamento">
<?php
include('config.php');
$conexion=$db;
if($conexion){
	$sentencia='select dept_no,dept_name from departments;';
	$linea=mysqli_query($conexion,$sentencia);
	while($registro=mysqli_fetch_array($linea)){
		echo '<option value='.$registro["dept_no"].'>'.$registro['dept_name'].'</option>';
	}
}

?>
</select>


<input type="submit" value="consultar"/>
<input type="reset" value="limpiar"/>
</fieldset>

</form>
</body>
</html>