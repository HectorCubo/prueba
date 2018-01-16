<?php include("funciones/conexion.php");?>
<?php

$nif=$_GET['ide'];

mysqli_query($conexion, "DELETE FROM clientes WHERE dni='$nif' ");


mysqli_query($conexion, "DELETE FROM asociaciones WHERE dni_cli='$nif' ");
mysqli_close($conexion);

header('location: clientes.php');

?>