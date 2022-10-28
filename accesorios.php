<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    
    <title>Catalogo</title>
<?php include "template/header.php"; ?>
<br><br><br>
<body>
    <h1 class="titulo"><img src="images/perifericos.png" id="peri"></h1>
    <div class="container">
        <?php 
        include("conexion.php");
        $query = "SELECT * FROM productos WHERE tipo='Periferico'";
        $consulta = pg_query($conexion, $query);
        while($row = pg_fetch_assoc($consulta)){
            ?>
            <div class="card">
            <a href="modal.php?id=<?php echo $row['id_producto']; ?>"><img src=" <?php echo ($row['imagen']); ?>" width="380"
            height="330"></a>
                <h4> <?php echo $row ['nombre']; ?> </h4>
                <a><?php echo $row ['marca']; ?></a>
            </div>

        <?php
        }
        ?>

    </div>
    <br>
</body>
<?php include "template/footer.php"; ?>
</html>

