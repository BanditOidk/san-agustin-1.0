

<?php
include("conexion.php");
if(isset($_POST["save2"])){
    
        $nombre = $_POST['nombre'];
        $imagen = $_POST['imagen'];
        
      
        
        $query = "INSERT into marcas (nombre, imagen) VALUES ('$nombre','$imagen')";
        if($result = pg_query($conexion, $query)){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 

}
?>
