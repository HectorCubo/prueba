<?php
    include("funciones/conexion.php");

    $codigo = $_GET['identificacion'];
	$nombre = $_GET['nombre'];
	$apell = $_GET['apellidos'];
	
	$tlf = $_GET['telefono'];
	$dir = $_GET['direccion'];
	$email = $_GET['email'];

	$mensaje="";
	$busqueda="SELECT dni From clientes  where dni='$codigo'";
	$consulta= mysqli_query($conexion,$busqueda);
	$fila = $consulta->num_rows;
	if ($fila != 0){
		$mensaje = "<input type=text name=dni id=dni placeholder=DNI value=$codigo required><br />
            <input type=text name=name id=name placeholder=Nombre  value=$nombre required><br />
            <input type=text name=apellidos id=apellidos placeholder=Apellidos value=$apell required><br />
            <input type=Number name=phone id=phone placeholder=Telefono value=$tlf required><br />
            <input type=text name=direccion id=direccion placeholder=Direccion value=$dir required><br />
            <input type=email name=mail id=mail placeholder=Correo electronico value=$email requiered><br />
            <input type=button class=botonAcceder  id=boton value=Guardar onClick=comprobar()></br></div></div>
            <p>Error: Un usuario cone este dni ya ha sido registrado en la base de datos.</p>

		";

	}
	else{

		mysqli_query($conexion, "INSERT INTO `clientes` (`dni`, `nombre`, `apellidos`, `direccion`,`telefono`, `email`) VALUES ('$codigo', '$nombre', '$apell', '$dir','$tlf','$email')");
		$mensaje.="<div><input type=text name=dni id=dni placeholder=DNI  required><br />
            <input type=text name=name id=name placeholder=Nombre  required><br />
            <input type=text name=apellidos id=apellidos placeholder=Apellidos  required><br />
            <input type=Number name=phone id=phone placeholder=Telefono required><br />
            <input type=text name=direccion id=direccion placeholder=Direccion  required><br />
            <input type=email name=mail id=mail placeholder=Correo electronico requiered><br />
            <input type=button class=botonAcceder  id=boton value=Guardar onClick=comprobar()></br></div></div>
            <p >El usuario ha sido registrado correctamente</p></div>";
	}

	mysqli_close($conexion); 
	echo $mensaje;

 ?>