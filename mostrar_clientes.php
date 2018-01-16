<?php 
	include("funciones/conexion.php");

	$busqueda="SELECT dni, nombre, apellidos, direccion, telefono, email From clientes ";
	$consulta= mysqli_query($conexion,$busqueda);
	$mensaje = "";
	$fila = $consulta->num_rows;
	if ($fila == 0){
		$mensaje.="
	    <tr>
	      	<td>No hay ningun cliente guardado en la base de datos</td>
	    </tr>
	    ";
		
	}

	else{
	while ($registro = mysqli_fetch_array($consulta)){
		$id=$registro['dni'];
		$nom=$registro['nombre'];
		$apl=$registro['apellidos'];	
		$dir=$registro['direccion'];
		$tlf=$registro['telefono'];
		$mail=$registro['email'];									   								
		$mensaje.="
	    <tr>
	      	<td>$id / </td>
	      	<td> $nom / </td>
	      	<td> $apl / </td>
	      	<td> $dir / </td>
	      	<td> $tlf / </td>
	      	<td> $mail / </td>
	      	<td><a href=borrar_cliente.php?ide=$id> Borrar </a></td>
	    </tr>
	    ";
	   }
	}
	mysqli_close($conexion);
	    
	 echo $mensaje;
?>