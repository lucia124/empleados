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
    <li><a href="">Hacer Pedido</a></li>
    <li><a href="#">Mis pedidos</a>
      <ul id="submenu">
        <li><a href="">Consultar Pedidos</a></li>
        <li><a href="">Consultar por fechas</a></li>      </ul>
    </li>
    <li><a href="">Listado Productos</a></li>
  
  </ul>
</nav>
	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>