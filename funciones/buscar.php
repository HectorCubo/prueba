<?php
    include("funciones/conexion.php");

	$caracteres = $_POST['valorBusqueda'];
	
	
	$mensaje="";
	$busqueda="SELECT codigo, nombre, descripcion From productos  where nombre LIKE '$caracteres%'";
		$consulta= mysqli_query($conexion,$busqueda);
		$fila = $consulta->num_rows;
		if ($fila == 0){
				$mensaje = "No hay producto para esta busqueda";
			}

		else{
			while ($registro = mysqli_fetch_array($consulta)){



				$iden=$registro['codigo'];
				$nom=$registro['nombre'];
				$des=$registro['descripcion'];

				$mensaje .= '<tr><td>'.$iden.'</td><td>'.$nom.'</td></tr>';
			}
		}
		mysqli_close($conexion); 

		echo $mensaje;
 ?>