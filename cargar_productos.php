<?php
    include("funciones/conexion.php");

    $json = file_get_contents("productos.json");
    $productos = json_decode($json, true);

    foreach ($productos as $producto) {

        $id=$producto['codigo'];
        $nom=$producto['nombre'];
        $des=$producto['descripcion'];

       
        mysqli_query($conexion,"INSERT INTO productos (codigo,nombre,descripcion) 
        VALUES ($id,'$nom','$des')"); 
        
    }   


    mysqli_close($conexion);
    header('Location: productos.php');
?>