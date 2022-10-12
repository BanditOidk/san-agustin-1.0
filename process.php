<?php
include ("conexion.php");
if(isset($_POST['save']))
{	 
	
	 $marca = $_POST['marca'];
	 $tipo = $_POST['tipo'];
	 $nombre = $_POST['nombre'];
     $descripcion = $_POST['descripcion'];
	 $precio = $_POST['precio'];
	 $imagen = $_POST['imagen'];

	 $query = "INSERT INTO perifericos(marca,tipo,nombre,descripcion,precio,imagen) 
	 values ('$marca','$tipo','$nombre','$descripcion','$precio','$imagen')";
	 if($result = pg_query($query)){
		echo "Data Added Successfully.";
	 }
	else{
		echo "Error.";
	 }
}
?>