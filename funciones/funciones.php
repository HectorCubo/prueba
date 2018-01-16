<?php 
function mostrar_productos() {
	include("conexion.php");
	$busqueda="SELECT codigo, nombre, descripcion From productos Order by codigo asc ";
	$consulta= mysqli_query($conexion,$busqueda);
	$fila = $consulta->num_rows;
	if ($fila == 0){
		echo  "<td colspan=3><b>Aun No hay productos en la base de datos. </b><a href=cargar_productos.php>Cargar productos ahora</a></td>";
	}

	else{
	while ($registro = mysqli_fetch_array($consulta)){
		$id=$registro['codigo'];
		$nom=$registro['nombre'];
		$des=$registro['descripcion'];											   								
	?>
	    <tr>
	      	<td><?php echo $id;?></td>
	      	<td><?php echo $nom;?></td>
	      	<td><?php echo $des;?></td>
	    </tr>
 <?php }

}
	mysqli_close($conexion);

}?>

<?php function clientes_asociar(){
include("conexion.php");
			$busqueda="SELECT dni, nombre, apellidos From clientes Order by nombre desc ";
			$consulta= mysqli_query($conexion,$busqueda);
			$fila = $consulta->num_rows;
			if ($fila == 0){
				echo  "<td colspan=3><b>Aun No hay ningun clinte en la base de datos</b></td>";
			}

		else{
			while ($registro = mysqli_fetch_array($consulta)){
				$id=$registro['dni'];
				$nom=$registro['nombre'];
				$apl=$registro['apellidos'];											   								
		?>
	   <tr>
	      	<td><?php echo "<a href=asociar.php?ide=$id>$id</a>";?></td>
	      	<td><?php echo $nom;?></td>
	      	<td><?php echo $apl;?></td>
	    </tr>
	    <?php } 
	}
	     mysqli_close($conexion);
	}

?>
<?php function mostrar_cleinte(){
include("conexion.php");
			$busqueda="SELECT dni, nombre, apellidos From clientes Order by nombre desc ";
			$consulta= mysqli_query($conexion,$busqueda);
			$fila = $consulta->num_rows;
			if ($fila == 0){
				echo  "<td colspan=3><b>Aun No hay ningun clinte en la base de datos</b></td>";
			}

		else{
			while ($registro = mysqli_fetch_array($consulta)){
				$id=$registro['dni'];
				$nom=$registro['nombre'];
				$apl=$registro['apellidos'];											   								
		?>
	   <tr>
	      	<td><?php echo "<a href=asociar.php?ide=$id>$id</a>";?></td>
	      	<td><?php echo $nom;?></td>
	      	<td><?php echo $apl;?></td>
	    </tr>
	    <?php } 
	}
	     mysqli_close($conexion);
	}

?>
