

<?php
include("conexion.php");
if(isset($_POST["save2"])){
    
        $nombre = $_POST['nombre'];
        $imagen = $_POST['imagen'];
        
      
        
        $query = "INSERT into marcas (nombre, imagen) VALUES ('$nombre','$imagen')";
        if($result = pg_query($conexion, $query)){
            echo "<script>alert('Añadido con Exito') </script>";
            echo "<script>setTimeout(\"location.href='insertar.php'\",1000)</script>";
	 }
	else{
		echo "<script>alert('Error al Añadir') </script>";
        echo "<script>setTimeout(\"location.href='insertar.php'\",1000)</script>";
        } 

}
?>
