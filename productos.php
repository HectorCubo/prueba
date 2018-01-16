<?php 
include("funciones/funciones.php");?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script src="funciones/funciones.js"></script>

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
     <section id="cuerpo">
      <div class="contenedor">
        <div class="capaIzquierda">
          <h1>Lista de productos sin filtrar</h1>
        	<table>
            <thead>
              <tr>
                 <th colspan="3">Productos</th>
               </tr>
              <tr>
                <th>Id</th>
                <th colspan="1">Nombre</th>
                <th colspan="1">Descripcion</th>
              </tr>
       
      	     </thead>
     		     <tbody>
    	         <?php mostrar_productos();?>
      		  </tbody>
    	     </table>
        </div>
         
          <div id="capaDerecha">
            <h1>Filtrar productos por nombre</h1>
            <form accept-charset="utf-8" method="POST">
            <input type="text" name="busqueda" id="busqueda" value="" placeholder="Nombre producto" maxlength="30" autocomplete="off" onKeyUp="buscar();" />

              </form>
          
            <table>
                <thead>
                  <tr>
                    <th colspan="3">Resultado busqueda</th>
                  </tr>
                  </thead>
                  <tbody id="resultadoBusqueda"><td colspan="3">Por favor introduce parametros de busqueda</td>
                  
                    </tbody>
                </table>

            </div>
          </div>
        </section>
</body>
</html>