<?php
include("funciones/funciones.php");
include("funciones/conexion.php");
$dni = $_GET['ide'];

$busqueda="SELECT dni, nombre, apellidos FROM clientes where dni = '$dni'";
$cons= mysqli_query($conexion,$busqueda);
$registro = mysqli_fetch_assoc($cons);
$nom= $registro['nombre'];
$apl= $registro['apellidos'];
?> 

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>Seleccionar productos</title>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script src="funciones/funciones.js"></script>

    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="estilos/menu.css">
   <link rel="stylesheet" href="estilos/estilos.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="funciones/script.js"></script>

</head>
<?php echo "<body onload=cargarAsociaciones('$dni')>";?>
   <div id='cssmenu'>
        <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="cargar_productos.php">Cargar Productos desde Json</a></li>
           <li class='active'><a href="productos.php">Ver productos</a></li>
           <li><a href="clientes.php">Clientes</a></li>
           <li><a href="asociociones.php">Ver asociaciones</a></li>
        </ul>
    </div>
    <section id="cuerpo">
      <div class="contenedor">
        
          <div class="capaIzquierda">
          <div class="titulo">
          <h1>Seleccina productos para el cliente: <?php echo $nom." ".$apl; ?></h1>
        </div>
          	<?php 
            $busqueda="SELECT codigo, nombre From productos Order by codigo asc ";
            $consulta= mysqli_query($conexion,$busqueda);
            while ($registro = mysqli_fetch_array($consulta)){
              $id=$registro['codigo'];
              $nom_pro=$registro['nombre'];
                                                  
              echo "<div class=boton_personalizado onclick=cargar($id,'$dni')>$nom_pro</div> ";
              /*echo "<input class=boton_personalizado onclick=cargar($id) type=button value=$nom /> ";*/
            }
             mysqli_close($conexion);
            ?>
    		  </div>
    		  <div id="capaDerecha">

            <table>
                <thead>
                  <tr>
                    <th colspan="2">Clinte: <?php echo $nom." ".$apl." Con DNI ".$dni;?></th>
                  </tr>
                  </thead>
                  <tbody id="resultado">
                  
                    </tbody>
                </table>

            </div>
    		  </div>
      </div>
    </section>
  </body>
  </html>