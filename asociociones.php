<?php include("funciones/funciones.php");?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>Inico| carga productos| clientes| ver asociacion</title>
     <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="estilos/menu.css">
   <link rel="stylesheet" href="estilos/estilos.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="funciones/script.js"></script>

</head>
<body>
   <div id='cssmenu'>
        <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="cargar_productos.php">Cargar Productos desde Json</a></li>
           <li class='active'><a href="productos.php">Ver productos</a></li>
           <li><a href="clientes.php">Clientes</a></li>
           <li><a href="asociociones.php">Asociar</a></li>
        </ul>
    </div>
    <div>
      <h1>ASOCIAR PRODUCTOS</h1>
    </div>
    <div>
    	<table>
  <thead>
    <tr>
      <th colspan="3">Selecciona un cleinte</th>
    </tr>
    <tr>
      <th>Dni</th>
      <th colspan="1">Nombre</th>
      <th colspan="1">Apellidos</th>
    </tr>
  	</thead>
 		<tbody>
	  	<?php clientes_asociar();?>
  		</tbody>
	</table>
   </div>

</body>
</html>