<?php include("funciones/conexion.php");?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>Gestionar clientes</title>
     <meta charset='utf-8'>
     <script type="text/javascript" src="/js/jquery.js"></script>
    <script src="funciones/funciones.js"></script>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="estilos/menu.css">
   <link rel="stylesheet" href="estilos/estilos.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="funciones/script.js"></script>


</head>
<body id="capaDerechaCli" onload="mostrar_cliente()">
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
        <div class="capaIzquierdaCli">
          <h1>Nuevo cliente</h1>
          <div class="capaForm">
            <div id="formulario">
              <input type="text" name="dni" id="dni" placeholder="DNI"  required/><br />
              <input type="text" name="name" id="name" placeholder="Nombre"  required/><br />
              <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"  required/><br />
              <input type="Number" name="phone" id="phone" placeholder="Telefono" required="" /><br />
              <input type="text" name="direccion" id="direccion" placeholder="Direccion"  required/><br />
              <input type="email" name="mail" id="mail" placeholder="Correo electronico" requiered /><br />
              <input type="button" class="botonAcceder"  id="boton" value="Guardar" onClick="comprobar()" /></br>
              
              </div>
           </div>
           <p  id="error"></p>
        </div>
         
          <div lass="capaDerechaCli">
            <h1>Todos los clientes</h1> 
            <table >
            
             <tbody id="VerClientes">
               
            </tbody>
           </table>
           <input type="button" class="recargar"  id="actualizar" value="Actualizar Clientes" onClick="mostrar_cliente()" />
          </div>
        </section>
</body>
</html>