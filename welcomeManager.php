<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
	  
	  
	  <nav class="dropdownmenu">
  <ul>
    <li><a href="#">Departamentos</a></li>
	<ul >
        <li><a href="CambiarSuDepartamento1.php">Cambiar de Departamento a otros trabajador</a></li>
        <li><a href="consultarMisDepartamentos.php">Consultar los departamenos por los que ha pasodo el </a></li> 
		<li><a href="consultarSusDepartamentos.html">Consultar los departamenos por los que ha pasodo un trabajador</a></li> 
		</ul>
    <li><a href="#">Salario</a></li>
      <ul >
        <li><a href="CambiarSuSalario.html">Cambiar el salario de un trabajador</a></li>
        <li><a href="consultarMisSalario.php">consultar sus salarios</a></li>
		<li><a href="consultarSusSalarios.html">Consultar los salarios de un trabajador</a></li> 
		</ul>
    <li><a href="#">Categorias</a></li>
	<ul >
        <li><a href="CambiarSusCategorias.html">Cambiar de Categoria a otro trabajador</a></li>
        <li><a href="consultarMisCategorias.php">Consultar las categorias por los que ha pasodo el </a></li> 
		<li><a href="consultarSusCategorias.html">Consultar los categorias por los que ha pasodo un trabajador</a></li> 
		</ul>
  
  </ul>
</nav>
	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>