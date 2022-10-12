<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/icon.png">

    <title>Inicio</title>
</head>


<body>
<?php include "template/header.php"; ?>
 <br><br><br>
 <?php include "template/sliders.php"; ?>

    <section id="computadoras">
    <h2><img src="images/nuestras.png" id="nuestras"></h2>
        <div class="container">
                 <?php 
        include("conexion.php");
        $query = "SELECT * FROM computadoras";
        $consulta = pg_query($conexion, $query);
            while($row = pg_fetch_assoc($consulta)){
            ?>
              <a href="modal.php?id=<?php echo $row['id_producto']; ?>"><img src="<?php echo($row['imagen']); ?>" height="380" width="380" ></a>
                      

        <?php
        }
        ?>
            
        </div>
        </div>
        </section>
        <section id="masvendido">
        <h2><img src="images/masvendido.png" id="vendido"></h2>
            <div class="container">     
                <?php 
        include("conexion.php");
        $query = "SELECT * FROM destacados";
        $consulta = pg_query($conexion, $query);
            while($row = pg_fetch_assoc($consulta)){
            ?>
            <a href="modal.php?id=<?php echo $row['id_producto']; ?>"><img src="<?php echo($row['imagen']); ?>" height="300" width="380" ></a>

        <?php
        }
        ?>
            
            </div>
        </section> 
        
    <br><br><br><br><br>
    <section id="marcas">
        <div class="container">
        <?php 
        include("conexion.php");
        $query = "SELECT * FROM marcas ";
        $consulta = pg_query($conexion, $query);
        while($row = pg_fetch_assoc($consulta)){
            ?>
          <img src="<?php echo($row['imagen']); ?>" width="200"
            height="78">

        <?php
        }
        ?>
            </div>
      
        </section>
        <br><br><br>
        <?php include "template/footer.php"; ?>

</body>


</html>