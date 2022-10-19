<?php
include ("conexion.php");
if(isset($_POST['save']))
{	 
	
	 $marca = $_POST['marca'];
	 $tipo = $_POST['tipo'];
	 $nombre = $_POST['nombre'];
     $descripcion1 = $_POST['descripcion1'];
     $descripcion2 = $_POST['descripcion2'];
     $descripcion3 = $_POST['descripcion3'];
     $descripcion4 = $_POST['descripcion4'];
     $descripcion5 = $_POST['descripcion5'];
     $descripcion6 = $_POST['descripcion6'];
     $descripcion7 = $_POST['descripcion7'];
     $descripcion8 = $_POST['descripcion8'];
	 $precio = $_POST['precio'];
	 $imagen = $_POST['imagen'];

	 $query = "INSERT INTO perifericos(marca,tipo,nombre,descripcion1,descripcion2,descripcion3,descripcion4,descripcion5,descripcion6,descripcion7,descripcion8,precio,imagen) 
	 values ('$marca','$tipo','$nombre','$descripcion1','$descripcion2','$descripcion3','$descripcion4','$descripcion5','$descripcion6','$descripcion7','$descripcion8','$precio','$imagen')";
	 if($result = pg_query($query)){
		echo "<script>alert('Añadido con Exito') </script>";
        echo "<script>setTimeout(\"location.href='insertar.php'\",1000)</script>";
	 }
	else{
		echo "<script>alert('Error al Añadir') </script>";
        echo "<script>setTimeout(\"location.href='insertar.php'\",1000)</script>";
	 }
}
?>