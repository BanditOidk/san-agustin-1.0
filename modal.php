<link rel="icon" type="image/x-icon" href="images/icon.png">
<?php 
include("conexion.php");
$idUser = $_REQUEST['id'];
$query = "SELECT * FROM productos WHERE id_producto = $idUser;";
$consulta = pg_query($conexion, $query);
$data = pg_fetch_assoc($consulta);
 ?>

 <!DOCTYPE html>
 
 <html>
 
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
 	<title>datos de producto</title>
	 
 </head>
 <body>
 <?php include "template/header.php"; ?>
 <br> <br> <br> <br> <br>
 <div class="container">
 <section class="modal">

      <h1><?php echo $data['nombre'];?></h1>
 	<img src="<?php echo ($data['imagen']); ?>">
     <p ><?php echo $data['descripcion1']; ?></p>
     <p ><?php echo $data['descripcion2']; ?></p>
     <p ><?php echo $data['descripcion3']; ?></p>
     <p ><?php echo $data['descripcion4']; ?></p>
     <p ><?php echo $data['descripcion5']; ?></p>
     <p ><?php echo $data['descripcion6']; ?></p>
     <p ><?php echo $data['descripcion7']; ?></p>
     <p ><?php echo $data['descripcion8']; ?></p>
 	<h2>s/.<?php echo $data ['precio']; ?></h2>
		 

		 </section>
           </div>
           
 </body>
 <?php include "template/footer.php"; ?>
 </html>
 
