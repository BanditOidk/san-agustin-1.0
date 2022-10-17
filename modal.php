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
 	<title>datos de producto</title>
	 <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
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
 <br><br><br><br>
 <?php include "template/footer.php"; ?>

 </html>