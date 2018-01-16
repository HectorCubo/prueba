<?php
    include("funciones/conexion.php");

	$codigo = $_GET['producto'];
	$nif = $_GET['nif'];
	

	mysqli_query($conexion, "INSERT INTO `asociaciones` (`dni_cli`, `codigo_pro`) VALUES ('$nif', $codigo)");
	
	
	$mensaje="";
	$busqueda="SELECT id, codigo_pro, dni_cli From asociaciones  where dni_cli='$nif'";
		$consulta= mysqli_query($conexion,$busqueda);
		while ($registro = mysqli_fetch_array($consulta)){
			$iden=$registro['codigo_pro'];
			$Codigo=$registro['codigo_pro'];
			$nom=$registro['dni_cli'];


			$buscaProducto="SELECT codigo, nombre FROM productos where codigo = '$Codigo'";
			$cons= mysqli_query($conexion,$buscaProducto);
			$resultado = mysqli_fetch_assoc($cons);
			$nomPro= $resultado['nombre'];

			$mensaje .= '<tr><td>'.$iden.'</td><td>'.$nomPro.'</td></tr>';
		}
mysqli_close($conexion); 
		echo $mensaje;
		
 ?>