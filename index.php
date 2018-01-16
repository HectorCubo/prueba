<?php include("funciones/conexion.php");?>
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
           <li class='active'><a href="index.php">Inicio</a></li>
           <li><a href="cargar_productos.php">Cargar Productos desde Json</a></li>
           <li><a href="productos.php">Ver productos</a></li>
           <li><a href="clientes.php">Clientes</a></li>
           <li><a href="asociociones.php">Ver asociaciones</a></li>
        </ul>
    </div>
 
        <section id="cuerpo">
        <h1>¿que deseas hacer?</h1>
      <div class="contenedor">
        
           <div class="capaIzquierda">
              <div class=boton_personalizado ><a href="cargar_productos.php" class="boton_personalizado">Cargar productos  JSON</a></div>
              <div class=boton_personalizado > <a href="productos.php" class="boton_personalizado">Ver los productos</a></div>
         
           </div>
          <div id="capaDerecha">
              <div class=boton_personalizado ><a href="clientes.php" class="boton_personalizado">Gestionar clientes</a></div>
              <div class=boton_personalizado ><a href="asociociones.php" class="boton_personalizado">Asociar productos</a></div>

          </div>
    
      </div>
    </section>
   
</body>
</html>