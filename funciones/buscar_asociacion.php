<?php
    include("funciones/conexion.php");

	/*$nif = $_GET['nif'];*/
	

	
	$mensaje="";
	$busqueda="SELECT id, codigo_pro, dni_cli From asociaciones  where dni_cli='56789987p'";
		$consulta= mysqli_query($conexion,$busqueda);
		if (mysql_num_rows($consulta)=0){
				$mensaje = "Aun no existen asociaciones de productos para est usuario"
			}

		else{
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
	}
		mysqli_close($conexion); 
		echo $mensaje;/*
		$numero=123456;
		echo $numero;*/
 ?>