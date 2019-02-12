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
    <li><a href="consultarMisDepartamentos.php">Consultar los departamentos por los que ha pasado</a></li>
    <li><a href="consultarMisSalario.php">consultar sus salarios en la empresa</a>
	<li><a href="consultarMisCategorias.php">consultar las categorias por las que ha pasado</a></li>
  </ul>
</nav>
	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>